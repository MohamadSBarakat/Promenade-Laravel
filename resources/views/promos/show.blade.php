@extends('layouts.app')

@section('content')
                    <a href="/promos" class="btn btn-default">Go Back</a>
                        <h2>{{$promo->id}}</h2>
                        <h1>{{$promo->titre}}</h1>
                        <h4>{{$promo->description}}</h4>
                        <h2>{{$promo->duree}}</h2>
               

 
@endsection