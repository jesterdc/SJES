<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentRequestController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request_forms.student-form');
    }

    public function store(Request $request)
    {
        //
    }



}
