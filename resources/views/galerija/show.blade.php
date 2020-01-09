@extends('layouts.app')

@section('content')
  <!-- Content Body Start -->
  <div class="content-body bg-white section custom-scroll">
           
    <div class="section-wrap section pt-120 pt-lg-30 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
        <div class="container">
            <div class="row">
                
                <!-- Portfolio Image -->
                <div  style="text-algin:center" class="portfolio-details-image col-lg-6 col-12 col-md-12 mb-sm-30 mb-xs-30">
                    <img  style="max-height: 66vh; width:auto; margin:auto  "src="/storage/cover_images/{{$galerija->cover_image}}" alt="">
                </div>
                
                <!-- Portfolio Content -->
                <div class="portfolio-details-content col-lg-6  col-md-12  col-12">
                   
                  {{$galerija->category->title}}
                    
                    <h1 class="title">{{$galerija->title}}</h1>
                    
                    <p style="word-wrap:break-word"> {{$galerija->body}}</p>
                    
                   
                  
                    
                   
                    
                </div>

            </div>
        </div>
    </div>
    
</div><!-- Content Body End -->
  

@endsection