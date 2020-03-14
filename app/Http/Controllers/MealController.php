<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menu = Meal::all();
        return view('meals.meals')->with(['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $meal = new Meal($request->except(''));
        $meal->image = '';
        $meal->save();
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Meal $meal
     * @return \Illuminate\View\View
     */
    public function show(Meal $meal)
    {
        return view('meals.show')->with(['meal' => $meal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Meal $meal
     * @return \Illuminate\View\View
     */
    public function edit(Meal $meal)
    {
        return view('meals.edit')->with(['meal' => $meal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Meal $meal
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->except(''));
        $meal->save();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Meal $meal
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Meal $meal)
    {
        try {
            $meal->delete();
        } catch (\Exception $e) {
        }
        return redirect()->route('menu.index');
    }
}
