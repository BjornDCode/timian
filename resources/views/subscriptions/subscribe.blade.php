@extends('layouts.static')

@section('content')
    <main class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Subscribe</h1>
            </div>
            <div class="panel-body">
                <checkout selectedPlan="{{ $plan }}" :plans="{{ $plans }}"></checkout>
            </div>
        </div>
    </main>
@endsection
