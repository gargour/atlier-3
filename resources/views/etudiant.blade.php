@foreach($liste as $value)
<!--@extends('layout')
@section ('content')
<div class="row" style="margin-top:5rem;">
    <div class="col-lg-12 margin-tb">
    <div class= "pull-left">
        <h2>Liste des etudient </h2>
</div>
<div class ="pull-right">
    <a class="btn btn-succes" href="#"> create new student </a>
</div>
</div>
</div>
<table class="table table-bordered table-hover">
    <tr>
        <th>numéro</th>
        <th>nom</th>
        <th>prenom</th>
        <th width="280px">Action</th>
</tr>-->
<tr>
    <td>{{$loop->index}}</td>
    <td>{{$value->nom}}</td>
    <td>{{}$value->prenom}</td>
    <td>{{}$value->classe->libelle}}</td>
    <td>
        <a class="btn btn-info" href="#">show</a>
        <a class="btn btn-primary" href="{{route ('etudiant.edit',$value->id}}">Edit</a>
        <button type="submit" class="btn btn-danger">Delete</button>
</td>

</tr>
</table>
@endforeach