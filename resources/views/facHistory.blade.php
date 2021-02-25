@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/facilitator/{{ $user->id }}"><p>Back to Main Page</p></a> <h1 align="center"> Your Sessions History :</h1><br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>KEY (share this)</th>
                <th>Problem</th>
                <th>nbParticipants</th>
                <th>Date</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            @foreach($sessions as $s)
                <tr>
                    <td>{{$s->title}} </td>
                    <td>{{$s->key}} </td>
                    <td>{{$s->problem}} </td>
                    <td>{{$s->nbParticipants}} </td>
                    <td>{{$s->created_at}} </td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-sm float-right"
                                onclick="window.location.href = '/session/result/{{$s->id}}'">View Details</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
