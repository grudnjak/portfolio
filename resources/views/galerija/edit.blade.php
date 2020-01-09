
@extends('layouts.app')
@section('content')
<div class="content-body bg-white section custom-scroll">
        <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-90 pb-lg-50 pb-md-50 pb-sm-50 pb-xs-20">
            <div class="container">
                
                <!-- Team Wrap -->
                <div class="row">
                        <div  style="float:none;margin:auto;" class="col-lg-12 col-md-12 col-12 mb-30">

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
                        </div>
                </div>
            </div>
        </div>
</div>
@endsection

