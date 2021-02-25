@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1 align="center"> 25/10 Crowd Sourcing </h1>
        </div>
        <br><br><br>
        <div>
            <h3>
                Welcome {{ $user->username }} To 25/10 Crowd Sourcing!
            </h3><br>
            <p>‘25/10 Crowd Sourcing’ is a workshop structure that allows you to rapidly generate and sift through a group’s
                important actionable ideas in less than 30 minutes. We’ve applied this structure both to small (12–20 members)
                and large groups (>150). Not only it is an innovative way to identify important, ‘out of the box’-solutions, it is
                also appreciated by participants for its highly active nature.
            </p>
        </div><br><br>
        <div>
            <a href="/s/create">
                <h2 align="center">
                Create New Session
                </h2>
            </a>
            <br>

        </div>
        <div>
            <a href="/history">
                <h2 align="center">
                    View Your Sessions History
                </h2>
            </a>
            <br>

        </div>
    </div>
@endsection
