<!-- Extendendo o template do pai -->
@extends('main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sobre</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive" src="/blog/public/img/sobre.jpg" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{ $descricao['titulo'] }}</h3>
            <h4>{{ $descricao['subTitulo'] }}</h4>
            <p align="justify">{!! $descricao['texto'] !!}</p>
        </div>
    </div>
    <hr>
@stop
