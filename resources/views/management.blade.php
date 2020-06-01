@extends('layouts.master', ['title' => 'Management'])

@section('header')

    @include('layouts/_navbar')
    @include('layouts/_main_header')
    
@stop


@section('container')
    @include('section/_about')
    @include('section/_courtage')
    @include('section/_health_service')
    @include('section/_teams')
    @include('section/_partenaire')
@stop