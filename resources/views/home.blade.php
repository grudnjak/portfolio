@extends('layouts.app')

@section('content')
<div id="wrapper">
        <!--content -->	
        <div class="content full-height">
            

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-primary" type="submit">Logout</button>
                          </form>
                 </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
