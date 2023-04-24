<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use App\Http\Requests\StorePhotographerRequest;
use App\Http\Requests\UpdatePhotographerRequest;
use Illuminate\Support\Facades\DB;

class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return view('photographers.index', [
            'photographers_pag' => DB::table('photographers')->orderBy('id', 'ASC')->simplePaginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photographers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhotographerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotographerRequest $request)
    {
        $input = $request->all();
        Photographer::create($input);

        return redirect()->route('photographers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function show(Photographer $photographer)
    {
        return view('photographers.show', [
            'ph' => $photographer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function edit(Photographer $photographer)
    {
        return view('photographers.edit', [
            'ph' => $photographer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotographerRequest  $request
     * @param  \App\Models\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotographerRequest $request, Photographer $photographer)
    {
        $input = $request -> all();        

        $photographer -> update($input);
        return redirect()->route('photographers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photographer $photographer)
    {
        $photographer -> delete();
        return redirect()->route('photographers.index');
    }
}
