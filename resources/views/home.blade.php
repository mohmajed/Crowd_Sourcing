@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1 align="center"> 25/10 Crowd Sourcing </h1>
    </div>
    <a href="/user/history"><p align="right">View Your History</p></a>
    <br><br><br>
    <div>
        <h3>
            Welcome {{ $user->username }} To 25/10 Crowd Sourcing!
        </h3>

        <br>
        <p>‘25/10 Crowd Sourcing’ is a workshop structure that allows you to rapidly generate and sift through a group’s
            important actionable ideas in less than 30 minutes. We’ve applied this structure both to small (12–20 members)
            and large groups (>150). Not only it is an innovative way to identify important, ‘out of the box’-solutions, it is
            also appreciated by participants for its highly active nature.
        </p>
    </div><br><br>
    <div>
        <h2 align="center">Enter the Session Key below to get started !</h2>

        <form action="{{ route('session.join') }}" method="post">
            <div class="card-body">
                @csrf

                <input type="text" class="form-control" name="link" />
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Join Session</button>
            </div>
        </form>
    </div>
</div>
@endsection
