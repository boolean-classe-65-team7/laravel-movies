@extends('layouts.app');

@section('main')
    <div class="row">

        @foreach ($movies as $movie)
            <div class="col-4">

                <div class="card" style="width: 18rem;">
                    <img src="{{$movie["url_img"]}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie["title"]}}</h5>
                        <p class="card-text">{{$movie["plot"]}}</p>
                        <p class="card-text">{{$movie["release_date"]}}</p>
                        <p class="card-text">{{$movie["genre"]}}</p>
                        <a href="#" class="btn btn-primary">Trama intera</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
