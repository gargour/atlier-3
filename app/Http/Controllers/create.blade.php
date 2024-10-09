<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajout nouvel Etudiant </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('etudiant')}}">back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whooops!</strong >there were some problems with your input
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('etudiant.update' ,$etudiant->id }} " method="POST" >
    @csrf
    @method('PUT')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>NOM :</strong>
                <input type="text" name="nom" value="{{etudiant->nom }} " class="form-control">
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>PRENOM :</strong>
                <input type="text" name="prenom" value="{{etudiant->prenom }} " class="form-control">
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>CLASSE :</strong>
                <select name="classe_id" class="form-control">
                    @foreach($classes as $classes)
                    @if($classes->id == $etudiant->classe_id)
                    <option value ="{{$classes->id }}" selected >{{$classes->libelle}}</option>
                    @else
                    <option value ="{{$classes->id }}" selected >{{$classes->libelle}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn  btn-primary ">submit</button>

            </div>
        </div>
</form>
@endsection
        