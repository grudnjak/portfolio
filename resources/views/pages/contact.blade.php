@extends('layouts.app')

@section('content')
 <!-- Content Body Start -->
 <div class="content-body bg-grey section custom-scroll">
       
        <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-sm-45 mb-xs-45">
                        <div class="row">

                            <!-- Contact Form -->
                            <div class="col-lg-10 col-12 mb-45">
                                <div class="contact-form">
                                    <h3>CONTACT FORM</h3>
                                    <form id="contact-form" action="assets/php/mail.php" method="post">
                                        <input type="text" name="name" placeholder="Name">
                                        <input type="email" name="email" placeholder="Email">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <input type="submit" value="Send">
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>

                            <!-- Contact Info -->
                            <div class="col-lg-10 col-12">
                                <div class="contact-info">
                                    <h3>QUICK CONTACT</h3>
                                    <ul>
                                        <li><span>Telefon:</span> <a href="#">+012456879</a>, <a href="#">+012456878</a></li>
                                        <li><span>Email:</span> <a href="#">info@example.com</a>, <a href="#">contact@example.com</a></li>
                                        <li><span>Location:</span> 2020 Willshire Glen, Alpharetta, GA-30009</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="row">

                            <!-- Contact Availability -->
                            <div class="col-lg-10 col-12 mb-45">
                                <div class="contact-availability">
                                    <h3>24/7 ANYTIME</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lebmid</p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                                </div>
                            </div>

                            <!-- Contact Map -->
                            <div class="col-lg-10 col-12">
                                <div id="contact-map"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div><!-- Content Body End -->
@endsection