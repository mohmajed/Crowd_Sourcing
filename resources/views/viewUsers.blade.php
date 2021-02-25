@extends('layouts.app')

@section('content')
    <div class="container">

            <a href="/admin"><p>Back to Main Page</p></a> <h1 align="center"> Users:</h1><br>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{$u->id}} </td>
                    <td>{{$u->name}} </td>
                    <td>{{$u->username}} </td>
                    <td>{{$u->email}} </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
