@extends('index')
@section('content')
    <div class="welcome">
        <div class="datas">
            <img src="{{ secure_asset('img/batmanlogo.png') }}" alt="">
            <p class="new">NOVO FILME</p>
            <p>A vingança chegou em Gotham. Chegou no HBO Max.</p>
            <div class="options">
                <a href="#" class="play"><i class="fas fa-play"></i></a>
                <button class="more">SAIBA MAIS</button>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="category">
            <div class="theme">
                Continue assistindo
            </div>
            <div class="row">
                <a href="#" class="item">
                    <div class="img">
                        <img src="{{ secure_asset('img/filme1.jpeg') }}" alt="">
                    </div>
                    <div class="name">
                        Jogador Número 1
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="img">
                        <img src="{{ secure_asset('img/filme2.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Matrix
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="img">
                        <img src="{{ secure_asset('img/filme3.webp') }}" alt="">
                    </div>
                    <div class="name">
                        O Incrível Mundo de Gumball
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="img">
                        <img src="{{ secure_asset('img/filme4.webp') }}" alt="">
                    </div>
                    <div class="name">
                        Duna
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="img">
                        <img src="{{ secure_asset('img/filme5.webp') }}" alt="">
                    </div>
                    <div class="name">
                        Homem-Aranha
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="img">
                        <img src="{{ asset('img/filme6.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Bumblebee
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop