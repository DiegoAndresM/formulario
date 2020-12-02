@extends('layouts.master')
@section('title', 'Bienvenido')

@section('header')
@parent
@stop

@section('navbar')
@parent
Barra de navegacion
@stop
@section('contenido')
<h1 class="h1">Pintores favoritos</h1>
    <h3 class="h3i"> Pablo Picasso</h3>
    <h3 class="h3i">Vincent van Gogh</h3>
    <h3 class="h3i">Claude Monet</h3>
    <h3 class="h3i">Leonardo Da Vinci</h3>
    <br>
<center><img src="/images/sticker.png" alt="20%" width="20%"></center>
<br>
@stop
@section('footer')
