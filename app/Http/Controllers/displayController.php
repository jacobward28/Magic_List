<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\dataService;

class displayController extends Controller
{
    public function display() {
        $ds = new dataService();
        $display = $ds->read();
        $display;
        return view('display');
    }
}
