<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use Illuminate\Http\Request;

class ApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Apotek';
        $apoteks = Apotek::paginate();

        return view('apotek.index', compact('title', 'apoteks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function show(Apotek $apotek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function edit(Apotek $apotek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apotek $apotek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apotek $apotek)
    {
        //
    }
}