@extends('layouts.app')

@section('content')
<div class="container">
    @if($user->role== 2)
        <a href="/home/{{ $user->id }}"><p>Back to Main Page</p></a> <h1 align="center"> This session's results :</h1><br>
    @elseif ($user->role== 3)
        <a href="/facilitator/{{ $user->id }}"><p>Back to Main Page</p></a> <h1 align="center"> This session's results :</h1><br>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th>By</th>
            <th>Solution</th>
            <th>Score</th>
            <th> </th>
        </tr>
        </thead>
        <tbody>

        @foreach($c as $card)
            <tr>
                <td>{{$card->user_id}}</td>
                <td>{{$card->text}}</td>
                <td>{{$card->score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
