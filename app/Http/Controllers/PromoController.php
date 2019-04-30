<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::orderBy('titre', 'desc')->paginate(1);
        return view('promos.index')->with('promos', $promos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre'        => 'required',
            'description'  => 'required',
            'lieuDeDepart' => 'required',
            'duree'        => 'required',
            'pourFamille'  => 'required',
            'photo'        => 'required'
        ]);

     


        // Create Post
        $promo = new Promo;
        $promo->titre = $request->input('titre');
        $promo->description = $request->input('description');
        $promo->lieuDeDepart = $request->input('lieuDeDepart');
        $promo->duree = $request->input('duree');
        $promo->pourFamille = $request->input('pourFamille');
        $promo->photo = $request->input('photo');

        $promo->save(); 

        return redirect('/promos')->with('success', 'Promenade Created'); 

    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promo = Promo::find($id);
        return view('promos.show')->with('promo', $promo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
