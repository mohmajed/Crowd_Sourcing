@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/s" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>
                Add New Session
            </h1><br><br><br><br>
        </div>
        <div class="row">
            <div class="form-group row">
                <label for="title"><b>Sesson Title</b></label>

                <div class="col-md-5">
                    <input id="title" type="text" size="50" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>
        </div>
<br>
        <div class="row">
                <div class="form-group row">
                    <label for="problem"><b>Sesson Problem</b></label>

                    <div class="col-md-7">
                        <input id="problem" type="text" size="400" class="form-control @error('problem') is-invalid @enderror" name="problem" value="{{ old('problem') }}" required autocomplete="problem" autofocus>

                        @error('problem')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                </div>
        </div><br>
        <div class="row">
            <div class="form-group row">
                <label for="name"><b>Number of Participants</b></label>

                <div class="col-md-5">
                    <input id="nbParticipants" type="number" min="5" max="20" class="form-control @error('nbParticipants') is-invalid @enderror" name="nbParticipants" value="{{ old('nbParticipants') }}" required autocomplete="nbParticipants" autofocus>

                    @error('nbParticipants')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

        </div><br>


        <div class="row">
            <button class="btn btn-primary">Create New Session</button>
        </div>
    </form>
</div>
@endsection
