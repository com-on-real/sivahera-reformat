@extends('layouts.master', ['title' => 'Cafe'])

@section('header')
    @include('layouts/_coffee_navbar')
@stop


@section('container')
    @include('section/_coffee_about')
@stop