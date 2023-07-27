@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <h1 class="h3 mb-0 text-gray-800">Add Transportation</h1>
                </div>
            </div>
            <form action="{{route('store-transportation')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" id="avatar" name="picture_transportation" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Name Transportation</label>
                            <input type="text" class="form-control" name="name_transportation" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <div id="price" class="form-text">exchange rate with (USD)</div>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="shortDescription" class="form-label">Short Description</label>
                            <textarea class="form-control" id="shortDescription" name="short_description" rows="2" maxlength="100"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="detailsDescription" class="form-label">Details Description</label>
                            <textarea class="form-control" id="detailsDescription" name="details_description" rows="3"></textarea>
                        </div>


                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
