@extends('layouts')

@section('content')
    <div class="col-md-12">
        @include('msg')
    </div>
    <div class="col-md-12">
        <form>
            <label for="exampleInputEmail1">Type N number: </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="gopagevalue" placeholder="1 - 1000000">
                <div class="input-group-append">
                    <button id="gopage" class="btn btn-outline-success" type="button">Go to page</button>
                </div>
            </div>
        </form>
    </div>
@endsection
