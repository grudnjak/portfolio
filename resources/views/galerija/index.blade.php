@extends('layouts.app')
@section('content')


<div class="content-body section custom-scroll">
    <div class="section-wrap section">
        <div class="container-fluid p-0">
            <div class="row row-5">
            
                
                 <!-- Portfolio Slider -->
                 <div class="portfolio-slider-5 col-12 p-0">    
      
    
    @if(count($slike) >= 1)
        @foreach ($slike as $slika)

                    <!-- Portfolio Item -->
                    <div class="col pl-5 pr-5">

                        <div class="portfolio-item portfolio-screen-height">

                            <a href="/galerija/{{$slika->id}}" class="portfolio-image"
                                style="background-image: url(/storage/cover_images/{{$slika->cover_image}})"></a>

                            <div class="portfolio-content">
                                <h4 class="title"><a href="/galerija/{{$slika->id}}">{{$slika->title}}</a></h4>
                                <span class="category">{{$slika->category->title}}</span><br>
                                @if(!Auth::guest() && Auth::user()->id == $slika->user_id )
                                <span class="category" ><a href="/galerija/{{$slika->id}}/edit"  class="btn btn-secondary btn-sm" style="color:white">Edit</a></span>
                                <span class="category">    {!!Form::open(['action' => ['GalerijaController@destroy', $slika->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete',['class' => 'btn btn-danger btn-sm'])}}
                                    {!!Form::close()!!} </span>

                                    @endif
                            </div>

                        </div>

                    </div>


                

   
        
        @endforeach
   

    @else
        <p>No photos found</p>
    @endif
</div>
</div>
</div>
</div>

</div>

@endsection

