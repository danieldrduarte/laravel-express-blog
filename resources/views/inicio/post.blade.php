<!-- Extendendo o template do pai -->
@extends('main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $post['titulo']  }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{ $post['subTitulo'] }}</h3>
            <p align="justify">{!! $post['texto'] !!}</p>
        </div>
    </div>
    <div class="row" style="text-align: center; margin-top: 25px;">
        <a class="btn btn-primary" href="{{ URL::to('')}}"><span class="glyphicon glyphicon-chevron-left"></span>Voltar</a>
    </div>
    <hr>
@stop
