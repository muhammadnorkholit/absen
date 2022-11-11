<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PrintpdfController extends Controller
{
    public function index()
    {
        return view('dashboard.print');
    }

    public function print()
    {
        return view('dashboard.printpdf');
    }
}
