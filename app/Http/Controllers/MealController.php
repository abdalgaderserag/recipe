<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{

    public function __construct()
    {
        $this->middleware('web');
    }

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
        $meal = new Meal($request->except(['_token']));
        $meal->image = '';
        $meal->save();
//        return response('',200);
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $meal = Meal::find($id);
        return view('meals.show')->with(['meal' => $meal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $meal = Meal::find($id);
        return view('meals.edit')->with(['meal' => $meal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $meal = Meal::find($id);
        $meal->title = $request->title;
        $meal->price = $request->price;
        $meal->describe = $request->describe;
        $meal->image = $request->image;
        $meal->image = '';
        $meal->save();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $meal = Meal::find($id);
        try {
            $meal->delete();
        } catch (\Exception $e) {
        }
        return redirect()->route('menu.index');
    }
}
