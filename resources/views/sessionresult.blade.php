@extends('layouts.app')

@section('content')
    <div class="container">

            <a href="/home/{{ $user->id }}"><p>Back to Main Page</p></a> <h1 align="center"> This session's results :</h1><br>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Score</th>
                <th>Suggest by</th>
                <th>Solution</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sessions as $s)
                <tr>
                    <td>{{$s->title}} </td>
                    <td>{{$s->problem}} </td>
                    <td>{{$s->nbParticipants}} </td>
                    <td>{{$s->created_at}} </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
