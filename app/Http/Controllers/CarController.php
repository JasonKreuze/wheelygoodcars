<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::orderBy('production_year')->get();
        return view('welcome', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'license_plate' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|numeric',
            'mileage' => 'required|numeric',
            'seats' => 'required|integer',
            'doors' => 'required|integer',
            'production_year' => 'required|integer',
            'color' => 'required|string',
        ]);
        $userId = Auth::id();
        $car = new Car($validatedData);
        $car->user_id = $userId;
        $car->save();
        return redirect()->route('cars.index')->with('success', 'Car created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
