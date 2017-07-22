@extends('layouts.static')

@section('content')
    <main class="plans-page container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Plans</h1>
            </div>
            <div class="panel-body plans">
                @foreach ($plans as $plan)
                    <div class="plan panel panel-default">
                        <div class="panel-heading">
                            <h2>{{ $plan->name }}</h2>
                        </div>
                        <div class="panel-body">
                            <p>{{ $plan->description }}</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
