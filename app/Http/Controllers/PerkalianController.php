<?php

namespace App\Http\Controllers;

use App\Models\perkalian;
use Illuminate\Http\Request;

class PerkalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($perkalian)
    {
        //controllers
        // return $perkalian * 2;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perkalian');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Request Respon

        $angka1 = $request->query('angka1');
        $angka2 = $request->query('angka2');

        if (!is_numeric($angka1) || !is_numeric($angka2)) {
            return back()->withErrors(['message' => 'Angka tidak valid']);
        }

        $hasil = $angka1 * $angka2;

        return view('hasil', compact('angka1', 'angka2', 'hasil'));

        // $validator = $request->validate([
        //     'angka1' => 'required|numeric',
        //     'angka2' => 'required|numeric',
        // ]);
        // $angka1 = $validator['angka1'];
        // $angka2 = $validator['angka2'];
        // $hasil = $angka1 * $angka2;
        // return view('hasil', compact('angka1', 'angka2', 'hasil'));
    }

    /**
     * Display the specified resource.
     */
    public function show(perkalian $perkalian)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(perkalian $perkalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, perkalian $perkalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(perkalian $perkalian)
    {
        //
    }
}