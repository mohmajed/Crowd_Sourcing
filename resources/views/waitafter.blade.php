@extends('layouts.app')

@section('content')
<div class="container">
    <h1 align="center">
        Please Wait while the cards are shuffling and/or being processed...
    </h1>
    <a  href="/card/rate/{{1+((($c->id)+1)%($s->nbParticipants))}}"><p align="center">Continue</p></a>
</div>
@endsection
