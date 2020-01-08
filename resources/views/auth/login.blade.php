@extends('layouts.app')

@section('content')



        <div class="content-body bg-grey section custom-scroll">
       
            <div class="section-wrap section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
                <div class="container">
                       
                    <div class="row">

                            <div  style="float:none;margin:auto;" class="col-lg-5 col-md-6 col-12 mb-30">
                                    <h1>Login</h1><br>
                                <div class="contact-form">
                                   
                                        <form  method="POST" action="{{ route('login') }}">
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
                                        
                                            <button type="submit" class="btn btn-dark ">
                                                    {{ __('Login') }}
                                                </button>
                                   
                                      
                                            </fieldset>
                                        </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                

       
</div>
@endsection

