<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeRequestSuccessController extends Controller
{
    public function index()
    {
        return view('livewire.request-success');
    }
}
