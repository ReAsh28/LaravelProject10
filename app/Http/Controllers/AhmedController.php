<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhmedController extends Controller
{
    public function Index(){
        return view('Ahmed.Index');
    }

    public function Create() {
        return view('Ahmed.Create');
    }

    public function Edit() {
        return view('Ahmed.Edit');
    }

    public function Delete() {
        return view('Ahmed.Delete');
    }
}
