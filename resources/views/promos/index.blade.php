@extends('layouts.app')

@section('content')
    <h3>Promenades</h3>
        @if(count($promos) > 0)
        <div class="row">
            <div class="col-lg-10">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Photo</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Durée</th>
                    </tr>

            @foreach($promos as $promo)
                 
                    <tr>
                        <td><img style="width:75%" src="/storage/photo/{{$promo->photo}}"></td>
                        <td><a href="/promos/{{$promo->id}}">{{$promo->titre}}</a></td>
                        <td>{{$promo->description}}</td>
                        <td>{{$promo->duree}}</td>
                </tr>

            @endforeach
           
                </table>

            </div>
        </div>
        {{$promos->links()}}    
        @else 
            <p>Désolé, Non Promenades</p>
        @endif                 
@endsection