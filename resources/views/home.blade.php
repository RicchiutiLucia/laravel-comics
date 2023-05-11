@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-3 h-75 ">
                    <div class="card m-5 bg-dark " >
                    <img src="{{$comic['thumb']}}" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fs-6">{{$comic['title']}}</h5>
                        
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection