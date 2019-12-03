@extends('layouts.app')

@section('content')
<div id="wrapper">
        <!--content -->	
        <div class="content full-height">
            
<div class="container">
    <div class="row justify-content-center">

            
            <section id="sec3">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>LOGIN</h3>
                            <h4>"Confidance over ability"</h4>
                            
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <div id="contact-form" class="fl-wrap">
                                    <div id="message"></div>
                                        <form  class="custom-form" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <fieldset>
                                            <input id="email" placeholder="Your E-mail *" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input id="password"  placeholder="Password"type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                            <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                   
                                      
                                            </fieldset>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

       
</div>
        </div>
</div>
@endsection
