@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-header"><center>{{ $s->title }}</center></div>
        <div class="card-body">

            <center>{{$s->problem}}</center>
            <form action="/card/create/{{$s->id}}" method="post">
                <div class="card-body">
                    @csrf
                    <label>Your Solution:</label>
                    <textarea class="form-control" name="text"> </textarea><br>
                    <input type="hidden" name="sessionid" value={{$s->id}}>
                    <center><button type="submit" class="btn btn-primary">Submit Solution</button></center>
                </div>
            </form>
        </div>
</div>
</div>
</div>
</div>
@endsection
