@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
    <h1 align="center">
        Rate The Following Solution
    </h1><br><br>
<div class="card">
    <div class="card-header"><center>{{ $s->title }}</center></div>
        <div class="card-body">
            <label>Problem :</label>
            <center>{{$s->problem}}</center><br>
            <form action="/card/wait" method="post">
                <div class="card-body">
                    @csrf
                    <label>Solution:</label>
                    <div>
                        {{$c->text}}
                    </div><br><br>
                    <input id="rating" type="number" min="1" max="5" class="form-control @error('rating') is-invalid @enderror"
                           name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>
                    <input type="hidden" name="cardid" value={{$c->id}}>
                    <center><button type="submit" class="btn btn-primary">Rate</button></center>
                </div>
            </form>
        </div>
</div>

</div>
</div>
</div>
@endsection
