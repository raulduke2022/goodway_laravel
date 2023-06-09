<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarModel;
use App\Http\Requests\StorecarModelRequest;
use App\Http\Requests\UpdatecarModelRequest;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = CarModel::latest()->get();
        return view('models/index', ['models'=> $context]);
    }

    public function detail(CarModel $id)
    {
        return view('models/detail', ['id'=> $id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecarModelRequest $request)
    {
        $model = new CarModel;
        $model->name = $request->name;
        $model->save();
        return redirect('/models');
    }

    /**
     * Display the specified resource.
     */
    public function show(carModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecarModelRequest $request, carModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carModel $carModel)
    {
        //
    }
}
