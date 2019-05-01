@extends('layouts.app')

@section('content')
    <h1>Edit Une Promenade</h1><br><br>
 <div class="row">
    <div class="col-lg-6">
    {!! Form::open(['action' => ['PromoController@update', $promo->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('titre', 'Titre')}}
            {{Form::text('titre', $promo->titre, ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>    

        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {!!Form::textarea('description',$promo->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description Text'])!!}
        </div> 
        
        
    </div>

    <div class="col-lg-5">

        <div class="form-group">
                {{Form::label('lieuDeDepart', 'LieuDeDepart')}}
                {{Form::text('lieuDeDepart',  $promo->lieuDeDepart, ['class' => 'form-control', 'placeholder' => 'LieuDeDepart'])}}<br><br>
        </div>    
        <div class="form-group">
                {{Form::label('duree', 'Duree')}}
                {{Form::text('duree', $promo->duree, ['class' => 'form-control', 'placeholder' => 'Duree'])}}
        </div>

        <div class="form-group">
                {{Form::label('photo', 'photo')}}
                {{Form::file('photo')}}
        </div>


        <div class="form-group">
                {{Form::label('pourFamille', 'Avec La Famille')}}
                {{Form::checkbox('pourFamille', 0 , False , ['class' => 'form-control'])}}
        </div>


</div>
</div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}                       
@endsection