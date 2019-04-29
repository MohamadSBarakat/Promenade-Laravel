@extends('layouts.app')

@section('content')
    <h3>Promenades</h3>
        <div class="row">
            <div class="col-lg-10">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Durée</th>
                    </tr>

            @foreach($promos as $promo)
                 
                    <tr>
                        <td>{{$promo->id}}</td>
                        <td><a href="/pormos/{{$promo->id}}">{{$promo->titre}}</a></td>
                        <td>{{$promo->description}}</td>
                        <td>{{$promo->duree}}</td>
                </tr>

            @endforeach
                </table>
            </div>
        </div>
                    
@endsection