@extends('layouts.app')

@section('content')
 <!-- Content Body Start -->
 <div class="content-body bg-grey section custom-scroll">
       
        <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-sm-45 mb-xs-45">
                        <div class="row">

                            <!-- Contact Form -->
                            <div class="col-lg-12 col-12 mb-45">
                                <div class="contact-form">
                                    <h3>KONTAKTNI OBRAZEC</h3>
                                    <form id="contact-form" method="POST" action="{{route('contactus.store')}}">
                                            {{csrf_field() }}
                                        <input type="text"  name="name" class="form-control" id="name" placeholder="Ime in Priimek" required>
                                        <input type="email"  name="email" class="form-control" id="email" placeholder="name@example.com" required>
                                        <textarea class="form-control" id="body" rowss="5" required name="body" placeholder="Sporocilo" ></textarea>
                                        <input type="submit" class="btn btn-big gold" value="Pošlji">
                                  
                                    {!! Form::close() !!}
                                    <p class="form-messege"></p>
                                </div>
                            </div>

                            <!-- Contact Info -->
                            <div class="col-lg-12 col-12">
                                <div class="contact-info">
                                    <h3>KONTAKT</h3>
                                    <ul>
                                        <li><span>Telefon:</span> <a href="#">+386 41 675 682</a></li>
                                        <li><span>Email:</span> <a href="#">info@fotografija-grudnik.si</a></li>
                                        <li><span>Naslov:</span> Šmiklavž 3a, 3342 Gornji Grad, Slovenija</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div><!-- Content Body End -->
@endsection