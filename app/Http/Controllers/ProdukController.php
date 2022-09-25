<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk() {
        $data = array('title' => 'produk');
        return view('produk.index', $data);
    }
}
