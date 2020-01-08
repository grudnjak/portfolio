@extends('layouts.app')

@section('content')

<div class="content-body bg-white section custom-scroll">
        <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-90 pb-lg-50 pb-md-50 pb-sm-50 pb-xs-20">
            <div class="container">
                
                <!-- Team Wrap -->
                <div class="row">
                <h2>Povprasevanja</h2><br><br>
@if(count($povprasevanja) >= 1)
        @foreach ($povprasevanja as $povprasevanje)
        <div  style="float:none;margin:auto;" class="col-lg-12 col-md-12 col-12 mb-30">
            

       
           <p> <span style="font-weight:bold">Ime in priimek: </span>{{$povprasevanje->name}} </p>
           <p> <span style="font-weight:bold">Email: </span>{{$povprasevanje->email}} </p>
           <p> <span style="font-weight:bold">Sporocilo: </span> </p><br>
           <p> {{$povprasevanje->body}}</p><br>
           <p> <span style="font-weight:bold">Datum: </span>  {!!date('d.m.Y H:i:s', strtotime($povprasevanje->created_at))!!}</p><br>
           <hr>
        </div>
        @endforeach
   
       
    @else
        <p>Ni povprasevanj</p>
    @endif
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

