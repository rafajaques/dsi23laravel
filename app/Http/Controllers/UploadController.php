<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('upload.index');
    }

    public function save(Request $form) {
        $arquivo = $form->file('file');

        // Grava com nome aleatório
        // $arquivo->store('public');

        // Nome sem a ext
        // basename($arquivo->getClientOriginalName(), '.'.$arquivo->getClientOriginalExtension());

        // Grava com o nome original
        $arquivo->storeAs('public', $arquivo->getClientOriginalName());

        return 'Gravado!';
    }
}
