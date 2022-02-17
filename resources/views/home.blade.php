@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball.</p>
    <div class="home">
        <div class="yellow">
            <h2>aantal aankomende tournooien:</h2>
            <h1>5</h1>
        </div>
        <div class="yellow-large">
            <img src="img/snitch.png">
        </div>
        <div class="yellow">
            <h2>totaal aantal teams:</h2>
            <h1>26</h1>
        </div>
    </div>
@endsection