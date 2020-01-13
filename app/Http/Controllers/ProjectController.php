<?php

namespace App\Http\Controllers;
use App\Category;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show',]]);
    }

    public function index()
    {
          $projects = Project::orderBy('created_at','desc')->get();
        return view('project.index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Category::pluck('title', 'id');
        return view('project.create')->with('items', $items );
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
            'client' => 'required',
            'service' => 'required',
            'date' => 'required',
            'website' => 'required',
            'title' => 'required',
            'category_id'=>'required',

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
              $project = new Project;
              $project->user_id =auth()->user()->id; 
              $project->cover_image= $fileNameToStore;
              $project->title = $request->input('title')  ;
              $project->client = $request->input('client')  ;
              $project->service = $request->input('service')  ;
              $project->date = $request->input('date')  ;
              $project->website = $request->input('website')  ;
              $project->body = $request->input('body')  ;
              $project->category_id = $request->input('category_id')  ;

              $project->save();
              return redirect('/project')->with('success','Projekt dodana');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show')->with('project', $project );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        //check for correct user
        if(auth()->user()->id !== $project->user_id ){
            return redirect('/project ')->with('error', 'Unautharize page' );
        }
        
            return view('project.edit')->with('project', $project );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'cover_image' ,
            'title',
            'body',
            'client',
            'service',
            'date',
            'website',

           
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
              $project = Project::find($id);
              if($request->hasFile('cover_image')){
                $project->cover_image = $fileNameToStore;
              }
              $project->title = $request->input('title')  ;
              $project->body = $request->input('body')  ;
              $project->client = $request->input('client')  ;
              $project->service = $request->input('service') ; 
              $project->date = $request->input('date')  ;
              $project->website = $request->input('website') ; 
              $project->save();
              return redirect('/project')->with('success','Project Updated ');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if(auth()->user()->id != $project->user_id ){
            return redirect('/project ')->with('error', 'Unautharize page' );
        }
        
        $project ->  delete();
        return redirect('/project')->with('success','Project Deleted ');
    }
}
