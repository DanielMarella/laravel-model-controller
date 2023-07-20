@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')

<div class="container mt-5 pt-5">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Title: {{$movie->title}}</h5>
                <h5 class="card-title">Original Title: {{$movie->original_title}}</h5>
                <p class="card-text">
                    Nationality: <strong>{{$movie->nationality}}</strong> <br>
                    Date: <strong>{{$movie->date}}</strong> <br>
                    Vote: <strong>{{$movie->vote}}</strong>
                </p>
            </div>
        </div>
    @endforeach
    </div>
</div>
    
@endsection