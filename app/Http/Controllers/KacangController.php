<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KacangController extends Controller
{
public function home() { return view('home'); }
public function produk() { return view('produk'); }
public function about() { return view('about'); }
public function kontak() { return view('kontak'); }
public function anggota() { return view('anggota'); }
}
