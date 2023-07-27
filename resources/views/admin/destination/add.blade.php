@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('store-destination') }}" enctype="multipart/form-data">
          @csrf
            <div class="card">
                <div class="card-header">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800">Add Destination</h1>
                    </div>
                </div>

                <div class="card-body">

                    <input type="text" class="form-control d-none" readonly value="{{ $kd }}" name="kd">
                    <div class="mb-3">
                        <select class="form-select form-control" name="city_id" aria-label="Default select example">
                            <option selected>Select City</option>
                            @foreach ($data as $item)
                                
                                <option value="{{ $item->id }}">{{ $item->city }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Destination Name</label>
                        <input type="text" name="destination_name" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <div id="price" class="form-text">exchange rate with (USD)</div>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="shortDescription" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_descript" id="shortDescription" rows="2" maxlength="100"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="detailsDescription" class="form-label">Details Description</label>
                        <textarea class="form-control" name="details_descript" id="detailsDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" id="avatar" name="thumbnails" accept="image/png, image/jpeg">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800">Add Foto</h1>
                        <button type="button" class="btn btn-outline-primary add-more"><i class="bi bi-plus-circle"></i>
                            Add
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class=" mb-3">
                        <div class=" add-more-data">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="file" name="foto_detail[]" id="foto_detail"
                                        accept="image/png, image/jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <button type="submit" class="btn btn-primary col-12">Save</button>
            </div>
        </form>
    </div>
@endsection
@push('js')
    <script src="{{ asset('backend/js/add_foto.js') }}"></script>
@endpush
