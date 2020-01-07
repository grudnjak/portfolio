@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')
    <h1>Uredi sliko</h1>
    {!! Form::open(["action" => ["GalerijaController@update", $galerija->id], "method" => "POST",'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Naslov ')}}
        {{
            Form::text('title',$galerija->title,['class'=>'form-control','placeholder'=>'description'])
        }}
    </div>
    <div class="form-group">
        {{Form::label('body','Body ')}}
        {{
            Form::textarea('body',$galerija->body,['class'=>'form-control','placeholder'=>'description'])
        }}
    </div>
    
        <div class="form-group">
                {{Form::file('cover_image')}}        
            
            </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  
     
@endsection

@endsection