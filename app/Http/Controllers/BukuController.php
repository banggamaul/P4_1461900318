<?php


namespace App\Http\Controllers;
use App\Exports\ExportBuku;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
	{
		$buku = DB::table('buku')
		->join('rak_buku','buku.id', '=', 'rak_buku.id_buku')
		->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
		->get();
		return view('buku0318',['buku'=>$buku]);
	}

	public function export_excel()
	{
		return Excel::download(new ExportBuku, 'Data_1461900318.xlsx');
	}
}
