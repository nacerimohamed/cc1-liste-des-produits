<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandeControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "tous les commandes";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "form de creation";
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
    public function show(string $id)
    {
        return "commande numero:" .$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    return "commande a modifier est :" .$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
