@extends('layouts.app')

@section('content')
    <a href="/promos" class="btn btn-primary">Go Back</a><br>
        <h1>{{$promo->titre}}</h1>
        <img style="width:100%" src="/storage/photo/{{$promo->photo}}">
        <div>{!!$promo->description!!}</div>
        <br>
        <h2>{{$promo->duree}}</h2>
        <hr>
        <a href="/promos/{{$promo->id}}/edit" class="btn btn-primary">Edit</a>
        
        {!!Form::open(['action' => ['PromoController@destroy', $promo->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
 
@endsection