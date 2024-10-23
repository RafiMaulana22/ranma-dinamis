<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BahasaModel;
use Illuminate\Http\Request;

class BahasaController extends Controller
{
    public function index()
    {
        $title = 'Bahasa';
        $bahasa = BahasaModel::get();
        $no = 1;

        return view('admin.bahasa.bahasa-view', compact(
            'title',
            'bahasa',
            'no'
        ));
    }

    public function action_tambah(Request $request)
    {
        $bahasa = $request->bahasa;
        $kemampuan = $request->kemampuan;
        $status = $request->status;

        $Bahasa = new BahasaModel();
        $Bahasa->bahasa = $bahasa;
        $Bahasa->kemampuan = $kemampuan;
        $Bahasa->status = $status;

        $Bahasa->save();
        return back()->with('success', 'Bahasa berhasil di tambah.');
    }
}
