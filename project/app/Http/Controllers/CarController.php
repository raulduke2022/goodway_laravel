<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Office;
use App\Models\CarModel;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = ['cars' => Car::all()];
        return view('cars/index', $context);
    }

    public function detail(Car $id)
    {
        return view('cars/detail', ['id'=> $id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = CarModel::get();
        $offices = Office::get();
        $context = ['models' => $models, 'offices' =>$offices];
        return view('cars/create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $data = $request->all();
        $gosnomer = $request->gosnomer;
        $model = CarModel::find($request->model);
        $office = Office::find($request->office);
        $vin = $request->vin;
        Car::create(['gosnomer'=> $gosnomer, 'car_model_id'=> $request->model, 'office_id'=> $request->office, 'vin'=> $vin]);
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
