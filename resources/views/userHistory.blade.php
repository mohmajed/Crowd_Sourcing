@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/home/{{ $user->id }}"><p>Back to Main Page</p></a> <h1 align="center"> Your Sessions History :</h1><br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Session title</th>
                <th>Problem</th>
                <th>Date</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            @for($i=0;$i<sizeof($s);$i++)
            @foreach($s[$i] as $key=>$session)

                <tr>
                    <td>{{$session->title}} </td>
                    <td>{{$session->problem}} </td>
                    <td>{{$session->created_at}} </td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-sm float-right"
                                onclick="window.location.href = '/session/result/{{$session->id}}'">View Results</button>
                    </td>

                </tr>

            @endforeach
            @endfor
            </tbody>
        </table>
    </div>
@endsection
