<!-- Extendendo o template do pai -->
@extends('main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lista de publicações</h1>
        </div>
    </div>
    @foreach($publicacoes AS $id => $post)
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $post['titulo'] }}</h3>
                <h4>{{ $post['subTitulo'] }}</h4>
                <p align="justify">{!! $post['texto'] !!}</p>
                <a class="btn btn-primary" href="/blog/public/post/{{ $id }}">Mais <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
    @endforeach
@stop
