<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeRequestController extends Controller
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
        return view('request_forms.employee-form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeRequest  $employeeRequest
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeRequest $employeeRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeRequest  $employeeRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeRequest $employeeRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeRequest  $employeeRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeRequest $employeeRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeRequest  $employeeRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRequest $employeeRequest)
    {
        //
    }
}
