@extends('layouts.app')

@section('content')
<div id="wrapper">
        <!--content -->	
        <div class="content full-height">
            

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div >Dashboard</div>
                <hr>
                <h4>Galerija</h4>
                
                <a  href="/galerija/create"><button class="btn btn-dark">DODAJ FOTOGRAFIJO</button></a> <a  href="/galerija"><button class="btn btn-dark">VSE FOTOGRAFIJE</button></a>
                <br>
                <br>
                <h4>Projekti</h4>
                
                <a  href="/project/create"><button class="btn btn-dark">DODAJ PROJEKT</button></a> <a  href="/project"><button class="btn btn-dark">VSI PROJEKTI</button></a>
                <br>
                <br>
                <h4>Povprasevanja</h4>
                <a  href="/povprasevanja"><button class="btn btn-dark">VSA POVPRASEVANJA</button></a>
                <br>
                <br>
               
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-dark" type="submit">Logout</button>
                          </form>
                 </a>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
