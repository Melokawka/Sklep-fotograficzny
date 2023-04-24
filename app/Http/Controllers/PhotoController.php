<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Photographer;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection\random;
use Carbon\Carbon;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        return view('photos.index', [
            'photos' => DB::table('photos')->orderBy('id', 'DESC')->simplePaginate(7),
            'photographers' => Photographer::all(),
            'photographers_rand' => Photographer::all()->Random(2)
        ]);
    }

    public function show(Photo $photo) {
        return view('photos.show', [
            'p' => $photo,
            'photographers' => Photographer::all()
        ]);
    }

    public function create()
    {
        return view('photos.create', [
            'photographers' => Photographer::all(),
            'today' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    public function store(StorePhotoRequest $request)
    {
        $input = $request->all();
        Photo::create($input);

        return redirect()->route('photos.index');
    }

    public function edit(Photo $photo)
    {
        return view('photos.edit', [
            'p' => $photo,
            'photographers' => Photographer::all()
        ]);
    }

    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        $request->validate([ 
            //'nazwa_wycieczki' => 'required|max:255|unique:trips,nazwa_wycieczki,'.$photo->id,
           // 'kontynent' => 'required|max:255',
            //'okres' => 'required|numeric',
            //'opis' => 'required|max:511',
            //'cena' => 'required|numeric',
            //'country_id' => 'required|numeric',
        ]);
        $input = $request -> all();        

        
        
        $photo -> update($input);
        return redirect()->route('photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo -> delete();
        return redirect()->route('photos.index');
    }
}