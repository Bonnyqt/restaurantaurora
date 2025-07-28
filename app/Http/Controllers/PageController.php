<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function psb() {
    return view('aurora.aurora');
}
    public function psb2() {
    return view('aurora.aurora2');
}
public function bistro() {
    return view('bistro.bistro');
}
public function bistro2() {
    return view('bistro.bistro2');
}
public function about() {
    return view('aurora.about');
}
}
