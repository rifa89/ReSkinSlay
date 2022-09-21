<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }
    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function produk() {
        $data = array('title' => 'produk');
        return view('produk', $data);
    }
    public function login() {
        $data = array('title' => 'login');
        return view('homepage.login', $data);
}
}