@extends('layouts.app')

@section('content')
  <!-- Content Body Start -->
  <div class="content-body bg-white section custom-scroll">
           
    <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
        <div class="container">
            <div class="row">
                
                <!-- Portfolio Image -->
                <div class="portfolio-details-image col-lg-7 col-12 mb-sm-30 mb-xs-30">
                    <img src="/storage/cover_images/{{$project->cover_image}}" alt="">
                </div>
                
                <!-- Portfolio Content -->
                <div class="portfolio-details-content col-lg-5 col-12">
                   
                  {{$project->category->title}}
                    
                    <h1 class="title">{{$project->title}}</h1>
                    
                    <p style="word-wrap:break-word"> {{$project->body}}</p>
                    <hr>
                    <ul class="project-info">
                            <li><span>Naročnik:</span> {{$project->client}}</li>
                            <li><span>Datum:</span> {!!date('d.m.Y', strtotime($project->date))!!}</li>
                            <li><span>Speltna stran:</span> <a href={{$project->website}}>{{$project->website}}</a></li>
                            <li> 
                                <span>Storitve:</span> 
                                {{$project->service}}
                                
                            </li>
                        </ul>
                   
                  <hr>
                  @if(!Auth::guest() && Auth::user()->id == $project->user_id )
                  {!!Form::open(['action' => ['ProjectController@destroy', $project->id], 'method' => 'POST'])!!}
                   {{Form::hidden('_method', 'DELETE')}}
                   {{Form::submit('Delete', ['class' => 'btn btn-danger pull-right'])}}
                   {!!Form::close()!!}
                  <a href="/project/{{$project->id}}/edit" class="btn  btn-dark ">Edit</a>
                   
       
                   @endif
                   
                    
                </div>

            </div>
        </div>
    </div>
    
</div><!-- Content Body End -->
  

@endsection