<?php

namespace App\Http\Controllers;

use App\Galerija;
use Illuminate\Http\Request;

class GalerijaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slike = Galerija::orderBy('created_at','desc')->limit(12)->get();
        return view('galerija.index')->with('slike',$slike);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galerija.create');
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
            'cover_image' => 'image|nullable|max:1999',
            'body' => 'required',
            'title' => 'required',
        ]);
        //Handle File Upload     
        if($request->hasFile('cover_image')){
                //Handle File Upload
  if($request->hasFile('cover_image')){
   //Get filename with the extension
    $filenamewithExt = $request->file('cover_image')->getClientOriginalName();
    
   //Get just filename
   $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
   
   //Get just ext
   $extension = $request->file('cover_image')->guessClientExtension();
   
   //FileName to store
   $fileNameToStore = time().'.'.$extension;
   
   //Upload Image
   $path = $request->file('cover_image')->storeAs('public/cover_images/',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
        }
         
        //create post
              $galerija = new Galerija;
              $galerija->user_id =auth()->user()->id; 
              $galerija->cover_image= $fileNameToStore;
              $galerija->title = $request->input('title')  ;
              $galerija->body = $request->input('body')  ;
              $galerija->save();
              return redirect('/galerija')->with('success','Slika dodana');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galerija = Galerija::find($id);
        return view('galerija.show')->with('galerija', $galerija );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galerija = Galerija::find($id);
        //check for correct user
        if(auth()->user()->id !== $galerija->user_id ){
            return redirect('/galerija ')->with('error', 'Unautharize page' );
        }
        
            return view('galerija.edit')->with('galerija', $galerija );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'cover_image' => 'required',
           
        ]);
          
            //Handle File Upload
if($request->hasFile('cover_image')){
//Get filename with the extension
$filenamewithExt = $request->file('cover_image')->getClientOriginalName();
//Get just filename
$filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
//Get just ext
$extension = $request->file('cover_image')->guessClientExtension();
//FileName to store
$fileNameToStore = time().'.'.$extension;
//Upload Image
$path = $request->file('cover_image')->storeAs('public/cover_images/',$fileNameToStore);
    }
     
        //create post
              $galerija = Galerija::find($id);
              if($request->hasFile('cover_image')){
                $galerija->cover_image = $fileNameToStore;
              }
              $galerija->save();
              return redirect('/galerija')->with('success','Galerija Updated ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $galerija = Galerija::find($id);
        if(auth()->user()->id !== $galerija->user_id ){
            return redirect('/galerija ')->with('error', 'Unautharize page' );
        }
        
        $galerija ->  delete();
        return redirect('/galerija')->with('success','Slika Deleted ');
   
    }
}
