@extends('layouts.main')

@section('title','Produto')

@section('content')
    @if ($busca != null)
        <p>Pesquisando por: {{$busca}}</p>
    @endif
@endsection
