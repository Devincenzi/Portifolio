@extends('layout.app')

@section('content')

<div class="grid grid-cols-2">
    <x-card-jogo jogoLink="{{ URL('jogos/cobra') }}">
        <x-slot name="titulo">COBRA</x-slot>
        <x-slot name="imagem"><img src="/images/snakeLogo.png"></x-slot>
        <x-slot name="texto">Jogo clássico da cobra.</x-slot>
    </x-card-jogo>

    <x-card-jogo jogoLink="{{ URL('jogos/tap-ganso') }}">
        <x-slot name="titulo">TAP GANSO</x-slot>
        <x-slot name="imagem"><img src="/images/ganso.png"></x-slot>
        <x-slot name="texto">Este jogo não chama Flappy Bird por motivos autorais.</x-slot>
    </x-card-jogo>

    <x-card-jogo jogoLink="{{ URL('jogos/batalha-naval') }}">
        <x-slot name="titulo">BATALHA NAVAL</x-slot>
        <x-slot name="imagem"><img src="/images/battleship.png"></x-slot>
        <x-slot name="texto">Batalha Naval e tal.</x-slot>
    </x-card-jogo>

    <x-card-jogo jogoLink="{{ URL('jogos/milho-grande') }}">
        <x-slot name="titulo">JOGO DO MILHO GRANDE</x-slot>
        <x-slot name="imagem"><img src="/images/milhao.png"></x-slot>
        <x-slot name="texto">Jogo de perguntas e respostas.</x-slot>
    </x-card-jogo>
</div>

@endsection