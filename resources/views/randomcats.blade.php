@extends('layouts')

@section('content')
    <div class="col-md-12 mb-5">
        <center>
            <a href="/"><button class="btn btn-primary">Back</button></a>
        </center>
    </div>
    <div class="col-md-12 mb-5">
        <center>
            <h5>Random Cats</h5>
            <span class="badge badge-light">N = {{ $N }}</span>
            <span class="badge badge-light">CountN = {{ $findNcount }} </span>
            <span class="badge badge-light">CountAll = {{ $CountAll }}</span>
        </center>
    </div>
    <div class="col-md-4 mb-2">
        <h6>Cat 1:</h6>
        <button class="btn btn-warning">{{ $Cache['Cat1'] }}</button>
    </div>
    <div class="col-md-4 mb-2">
        <h6>Cat 2:</h6>
        <button class="btn btn-warning">{{ $Cache['Cat2'] }}</button>
    </div>
    <div class="col-md-4 mb-2">
        <h6>Cat 3:</h6>
        <button class="btn btn-warning">{{ $Cache['Cat3'] }}</button>
    </div>
@endsection
