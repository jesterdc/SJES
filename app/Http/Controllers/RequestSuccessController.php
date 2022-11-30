<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSuccessController extends Controller
{
    public function index()
    {
        return view('livewire.request-success');
    }

    public function store(Request $request)
    {
        //
    }
}
