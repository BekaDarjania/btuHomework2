<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('index')->with('cars', $cars);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Car::create([
            'name' => 'mazda',
            'make' => 'mother russia',
            'model' => 'RPG 69',
            'license_number' => 'RUS 233',
            'weight' => 900.23,
            'registration_year' => 1980
        ]);
        return 'success';
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
