@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
          <img class="card-img-top" src="{{ asset('user/assets/images/transportation/AVANZA.jpg') }}" alt="Title" style="width: 30rem">
          <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="title" class="form-label">Name Transportation</label>
                    <input type="text" class="form-control" id="title">
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div id="price" class="form-text">exchange rate with (USD)</div>
                    <input type="text" class="form-control" id="price">
                  </div>
                  <div class="mb-3">
                    <label for="shortDescription" class="form-label">Short Description</label>
                    <textarea class="form-control" id="shortDescription" rows="2" maxlength="100"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="detailsDescription" class="form-label">Details Description</label>
                    <textarea class="form-control" id="detailsDescription" rows="3"></textarea>
                  </div>
            </form>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <button type="submit" class="btn btn-primary mt-4 mb-4 mr-2">Save</button>
                    <a href="{{ url('/admin/list-transportation') }}"><button type="submit" class="btn btn-danger mt-4 mb-4">Cancel</button></a>    
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection