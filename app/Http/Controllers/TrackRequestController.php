<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackRequestController extends Controller
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
        return view('track.track_request');
    }

    public function store(Request $request)
    {
        //
    }
}
