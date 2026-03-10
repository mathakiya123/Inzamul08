<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminDashabord;
use DB; 


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // apply select query for count total contact
        $totalContact=DB::table('contacts')->count();
        // apply select query for count total registered users 
        $totalUsers=DB::table('users')->count();
        // apply select query for count total employee
        $totalEmployee=DB::table('admin_add_employees')->count();
        // print query result
        //dd($totalContact,$totalEmployee);
        // apply select query for count total task
        // pass data in view
        return view('task.admin.dashboard',compact('totalContact','totalEmployee','totalUsers'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
