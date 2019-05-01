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
        $promos = Promo::orderBy('created_at', 'desc')->paginate(4);
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
        
            'photo'        => 'image|nullable|max:1999'
        ]);
         
        // Handle File Upload
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/photo', $fileNameToStore);

      /*  // Handle File Upload
        if($request->hasFile('photo')){
            // Get filename with the extenion
           
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename To Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/photo', $fileNameToStore); */

        } else {
            $fileNameToStore = 'noimage.jpg';    
        }
            


        // Create Post
        $promo = new Promo;
        $promo->titre = $request->input('titre');
        $promo->description = $request->input('description');
        $promo->lieuDeDepart = $request->input('lieuDeDepart');
        $promo->duree = $request->input('duree');
        $promo->pourFamille = $request->input('pourFamille')||false;
        $promo->photo = $fileNameToStore;
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
        $promo = Promo::find($id);
        return view('promos.edit')->with('promo', $promo);
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
        $this->validate($request, [
            'titre'        => 'required',
            'description'  => 'required',
            'lieuDeDepart' => 'required',
            'duree'        => 'required',
            'pourFamille'  => 'required',
            'photo'        => 'image|nullable|max:1999'
        ]);

         // Handle File Upload
         if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/photo', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';    
        }
            
            

        // Create Post
        $promo = Promo::find($id);
        $promo->titre = $request->input('titre');
        $promo->description = $request->input('description');
        $promo->lieuDeDepart = $request->input('lieuDeDepart');
        $promo->duree = $request->input('duree');
        $promo->pourFamille = $request->input('pourFamille');
        $promo->photo = $fileNameToStore;
        $promo->save(); 

        return redirect('/promos')->with('success', 'Promenade Updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::find($id);
        $promo->delete();
        return redirect('/promos')->with('success', 'Promenade Removed'); 
    }
}
