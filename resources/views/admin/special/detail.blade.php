@extends('admin.master')

@section('content')
@section('content')
<div class="container-fluid">
    
    <div class="card">
        <img src="{{ asset('storage/'.$data->picture) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="d-flex justify-content-center mb-5">
                <a href="{{ route('specialoffers') }}"><button type="button" class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </div>
</div>
@endsection