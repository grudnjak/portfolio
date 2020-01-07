@extends('layouts.app')

@section('content')
  <!-- Content Body Start -->
  <div class="content-body bg-white section custom-scroll">
           
    <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
        <div class="container">
            <div class="row">
                
                <!-- Portfolio Image -->
                <div class="portfolio-details-image col-lg-7 col-12 mb-sm-30 mb-xs-30">
                    <img src="/storage/cover_images/{{$galerija->cover_image}}" alt="">
                </div>
                
                <!-- Portfolio Content -->
                <div class="portfolio-details-content col-lg-5 col-12">
                   
                  {{$galerija->category->title}}
                    
                    <h1 class="title">{{$galerija->title}}</h1>
                    
                    <p>{{$galerija->body}}</p>
                    
                   
                    <!-- Project Share -->
                    <div class="project-share">
                        <span>Share:</span>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    
                   
                    
                </div>

            </div>
        </div>
    </div>
    
</div><!-- Content Body End -->
  

@endsection