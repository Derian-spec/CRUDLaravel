<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{

    public function index($pertanyaan_id) {
        // dd('cek');
        $jawaban = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
        // dd($jawaban);
        return view('layouts.items.jawaban', compact('jawaban'));
    }

    public function create() {
        return view('layouts.items.formjawaban');
    }

    public function store($pertanyaan_id, Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        JawabanModel::save($data);
        // dd($item);
        return redirect('/pertanyaan');
    }

}