@extends('layouts.master')
@section('title', 'Bienvenido')

@section('header')
@parent
@stop

@section('navbar')
@parent
@stop
@section('contenido')
    <h1>Login</h1>
    <br>
    <form action="{{action('Pintores@login')}}" method="post">
    @csrf
    <label for= "user">User</label>
    <input type="text" name="user"> <br>

    <label for= "password">password</label>
    <input type="password" name="password"> <br>

    <input type= "submit" value= "Submit">
</form>
@stop
@section('footer')
