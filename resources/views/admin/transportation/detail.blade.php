@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('update-transportation', $data->id) }}" enctype="multipart/form-data" method="POST">
          @csrf 
          <div class="card">
                <img class="card-img-top" src="{{ asset('storage/' . $data->picture_transportation) }}" alt="Title"
                    style="width: 30rem">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" id="avatar" name="picture_transportation"
                                accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Name Transportation</label>
                        <input type="text" name="name_transportation" value="{{ $data->name_transportation }}" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <div id="price" class="form-text">exchange rate with (USD)</div>
                        <input type="text" name="price" value="{{ $data->price }}" class="form-control" id="price">
                    </div>
                 
                    <div class="mb-3">
                        <label for="detailsDescription" class="form-label">Details Description</label>
                        <textarea class="form-control" name="details_description" id="detailsDescription" rows="3">{{ $data->details_description }}</textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <button type="submit" class="btn btn-primary mt-4 mb-4 mr-2">Save</button>
                            <a href="{{ route('list-transportation') }}" class="btn btn-danger mt-4 mb-4">
                                Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
