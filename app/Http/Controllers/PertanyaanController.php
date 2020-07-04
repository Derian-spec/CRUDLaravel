<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;
// use App\Models\ItemModel;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    
    public function index() {
        $pertanyaans = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view('layouts.items.pertanyaan', compact('pertanyaans'));
    }

    public function create() {
        return view('layouts.items.formPertanyaan');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $item = PertanyaanModel::save($data);
        // dd($item);
        if($item){
            return redirect('/pertanyaan');
        }
    }

    // public function show($id){
    //     $pertanyaan = PertanyaanModel::find_by_id($id);
    //     $jawabans = JawabanModel::find_by_pertanyaan_id($id);

    //     return view('layouts.items.detail_jawaban',compact('pertanyaan', 'jawabans'));
    // }
}