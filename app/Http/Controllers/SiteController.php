<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function view_data() {
        $judul = 'Data Prodi';
        $arr = ['IF', 'IT', 'SE', 'DS'];

        return view('view_data', [
            'title' => $judul,
            'data' => $arr,
        ]);
    }
}
