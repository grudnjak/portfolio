@extends('layouts.app')

@section('content')

<div class="content-body bg-white section custom-scroll">
        <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-90 pb-lg-50 pb-md-50 pb-sm-50 pb-xs-20">
            <div class="container">
                
                <!-- Team Wrap -->
                <div class="row">
              
@if(count($projects) >= 1)
        @foreach ($projects as $project)
       <a href="/project/{{$project->id}}">
     <div  class="col-lg-12 col-md-12 col-12 mb-30">

        <div class="row">


            <div  class="col-lg-7 col-md-7 col-12 mb-30">
                <img src="/storage/cover_images/{{$project->cover_image}}" alt="">
            </div>

            <div  class="col-lg-5 col-md-5 col-12 ">

       
            <h2>{{$project->title}} </h2>
            <p> <span style="font-weight:600">Naročnik: </span> <br>{{$project->client}}</p>
            <p> <span style="font-weight:600">Spletna stran: </span> <br>{{$project->website}}</p>
            <p> <span style="font-weight:600">Storitev: </span>  <br>{{$project->service}}</p> 

            </div>
        
            
        </div>
        <div class="row">
        <div  class="col-lg-12 col-md-12 col-12 ">

                @if(!Auth::guest() && Auth::user()->id == $project->user_id )
      
                {!!Form::open(['action' => ['ProjectController@destroy', $project->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                {!!Form::close()!!}
               <a href="/project/{{$project->id}}/edit" class="btn  btn-dark ">Edit</a>
               
                @endif
        </div>
        </div>
            <hr>
        
    </a>
        
        </div>
        
        @endforeach
   
       
    @else
        <p>Ni projektov</p>
    @endif
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

