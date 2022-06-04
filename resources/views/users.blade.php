@extends('index')
@section('content')
        <div class="title">
            <p>Quem está assistindo?</p>
        </div>
        <div class="users">
            <div class="user">
                <a href="/home/User A" id="user1">A</a>
                <p>User A</p>
            </div>
            <div class="user">
                <a href="/home/User B" id="user2">B</a>
                <p>User B</p>
            </div>
            <div class="user">
                <a href="/home/User C" id="user3">C</a>
                <p>User C</p>
            </div>
            <div class="user">
                <a href="/home/User D" id="user4">D</a>
                <p>User D</p>
            </div>
        </div>
        <div class="options">
            <button class="option" id="adult"><span>+</span> ADULTO</button>
            <button class="option" id="kid"><span>+</span> CRIANÇA</button>
        </div>
        <div class="optionPerfil">
            <button class="gerenciar">GERENCIAR PERFIS</button>
        </div>
@stop