<?php

namespace App\Http\Controllers;

use App\Models\hello;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Controllers
        return 'Hello World';
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
    public function show(hello $hello)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hello $hello)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hello $hello)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hello $hello)
    {
        //
    }
}