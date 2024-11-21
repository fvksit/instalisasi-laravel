<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Task Query Builder
        // $carsQueryBuilder = DB::table('cars')
        //     ->whereYear('tanggal_pembuatan', 1991)
        //     ->orderBy('tanggal_pembuatan', 'desc')
        //     ->get();
        // $carsQueryBuilder = $carsQueryBuilder->map(function ($car) {
        //     $car->tanggal_pembuatan = $car->tanggal_pembuatan ? date('Y', strtotime($car->tanggal_pembuatan)) : null;
        //     return $car;
        // });
        // return view('/cars', compact('carsQueryBuilder'));

        // Task Eloquent
        $carsEloquent = Cars::with('manufacture', 'reviews')->whereYear('tanggal_pembuatan', 1991)
            ->orderBy('tanggal_pembuatan', 'desc')
            ->get();
        return view('/cars', compact('carsEloquent'));
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

        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'jenis' => 'required|string|max:255',
        //     'harga' => 'required|numeric',
        //     'tanggal_pembuatan' => 'required|date',
        // ]);

        //Task Query Builder
        // DB::table('cars')->insert([
        //     'name' => $validated['name'],
        //     'jenis' => $validated['jenis'],
        //     'harga' => $validated['harga'],
        //     'tanggal_pembuatan' => $validated['tanggal_pembuatan'],
        //     'created_at' => now(),
        // ]);

        // Task Eloquent
        // Cars::create($validated);

        // return redirect()->route('cars.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $cars)
    {
        //
    }
}