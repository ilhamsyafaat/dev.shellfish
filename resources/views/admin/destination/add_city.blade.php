@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>Add City</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
              <label for="" class="form-label">City Name</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <button type="button" class="btn btn-primary col-12">Save</button>
</div>
@endsection
