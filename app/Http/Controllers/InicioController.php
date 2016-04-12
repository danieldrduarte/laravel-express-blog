<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InicioController extends Controller
{
    private $posts = [
        [
            "titulo"    => "Titulo 001",
            "subTitulo" => "SubTitulo 001",
            "texto"     => "Praesent id aliquam lorem. Vivamus ultrices magna metus, ut vestibulum urna ullamcorper 
                            elementum. Nam quis felis ultrices, aliquam quam vitae, lacinia neque. Nullam a vulputate 
                            magna. Proin maximus tristique massa eget efficitur. Maecenas interdum blandit tortor, 
                            eget lobortis nibh auctor nec.",
            "img"       => "teste001.png"
        ],
        [
            "titulo"    => "Titulo 002",
            "subTitulo" => "SubTitulo 002",
            "texto"     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum quam ut 
                            luctus pharetra. Sed eget iaculis est. Vivamus finibus dolor tempor, sollicitudin 
                            nulla in, pretium leo. Vestibulum ullamcorper sed tortor eget dapibus. Quisque eget 
                            metus tincidunt, feugiat eros sit amet, semper velit. Vestibulum ante ipsum primis in 
                            faucibus orci luctus et ultrices posuere cubilia Curae.",
            "img"       => "teste002.png"
        ],
        [
            "titulo"    => "Titulo 003",
            "subTitulo" => "SubTitulo 003",
            "texto"     => "Maecenas malesuada, lectus quis congue pellentesque, metus lacus fermentum risus, 
                            nec ullamcorper risus odio eget ante. Praesent faucibus vitae elit et dignissim. 
                            Nam non metus malesuada, convallis nulla sed, eleifend ipsum. Nulla vel augue egestas, 
                            tempor eros sed, blandit enim. Vivamus urna leo, molestie nec consequat ac, aliquet 
                            fermentum nulla. Fusce vitae metus varius, accumsan nunc at, commodo sem. Maecenas eget 
                            eros eget elit sollicitudin iaculis quis eu mi. Nullam sed neque libero. In hac 
                            habitasse platea dictumst.",
            "img"       => "teste003.png"
        ]
    ];

    public function index()
    {
        $publicacoes = $this->posts;
        return view("inicio.index", compact('publicacoes'));
    }

    public function sobre()
    {
        $descricao = [
            "titulo"    => "Daniel Duarte",
            "subTitulo" => "Programador",
            "texto"     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum quam ut 
                            luctus pharetra. Sed eget iaculis est. Vivamus finibus dolor tempor, sollicitudin 
                            nulla in, pretium leo. Vestibulum ullamcorper sed tortor eget dapibus. Quisque eget 
                            metus tincidunt, feugiat eros sit amet, semper velit. Vestibulum ante ipsum primis in 
                            faucibus orci luctus et ultrices posuere cubilia Curae; Morbi pellentesque sem a nibh 
                            varius, vel dictum urna facilisis. Sed at posuere nisi. Integer ut vehicula dolor. 
                            Praesent eu dui sed enim pellentesque accumsan. Phasellus vel venenatis eros, non eros. 
                            Duis sed purus eu magna venenatis placerat vel et massa.",
            "img"       => "sobre.jpg"
        ];

        return view("inicio.sobre", compact('descricao'));
    }

    public function post($id)
    {
        $post = $this->posts[$id];
        return view("inicio.post", compact('post'));
    }
}
