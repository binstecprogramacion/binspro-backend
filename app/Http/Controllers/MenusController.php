<?php

namespace App\Http\Controllers;

use App\Models\menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = menus::with('children')->where("parent_id", "=", 0)->orderBy('id')->get();
        return response()->json($menus, 200);
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
    public function show(menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, menus $menus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menus $menus)
    {
        //
    }
}
