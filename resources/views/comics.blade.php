@extends('layouts.app')
@section('content')
    <section class="jumbo">
        <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron">
    </section>
    @include('partials/archive')

@endsection