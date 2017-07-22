@extends('layouts.static')

@section('content')
    <main class="front-page">
        <div class="info">
            <h1 class="title">Timian</h1>
            <p class="tagline">A business analytics tool</p>
        </div>
        <div class="button-group">
            <a href="{{ route('plans') }}" class="btn btn-primary">Get Started</a>
            <a href="{{ route('login') }}" class="btn btn-default">Sign In</a>
        </div>
    </main>
@endsection
