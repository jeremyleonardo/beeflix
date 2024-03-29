@extends('layouts.app')

@prepend('styles')
<link rel="stylesheet" href="{{asset('css/index.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header')

<div class="container">


    @foreach($genres as $genre)

    <div class="mb-5 mt-3">
        <div>
            <h2 class="d-inline">
                <a class="text-dark" href="/genre/{{$genre->id}}">
                    {{$genre->name}}
                </a>
            </h2> &nbsp;
            @if(request()->is('/'))
            <a class="text-danger" href="/genre/{{$genre->id}}">View All {{$genre->name}}</a>
            @endif
        </div>
        <div class="row">
            @foreach($genre->movies as $movie)
            <div class="col-xl-3 col-md-6 col-12 mt-4">
                <div class="card">
                    <div>
                        <img class="mov-thumbnail" src="{{asset($movie->photo)}}">
                    </div>
                    <div class="m-3 mov-title">
                        <h5>
                            {{$movie->title}}
                        </h5>
                    </div>
                    <div>
                        <a href="/movie/{{$movie->id}}">
                            <button type="button" class="btn btn-danger btn-sm btn-block">LIHAT FILM</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endforeach

</div>


@endsection

@section('script')

@endsection
