@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('update-destination', $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800">Add Destination</h1>
                    </div>
                </div>
                <input type="text" class="form-control d-none" readonly value="{{ $data->id }}" name="kd">
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img class="card-img-top" src="{{ asset('storage/' . $data->thumbnails) }}" alt="Title"
                            style="width: 30rem">
                    </div>

                    <div class="mb-3">
                        <select class="form-select form-control" name="city_id" aria-label="Default select example">
                            @foreach ($kota as $item)
                                <option value="">Select City</option>
                                <option value="{{ $item->id }}" @if ($item->id == $data->city_id) selected @endif>
                                    {{ $item->city }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Destination Name</label>
                        <input type="text" value="{{ $data->destination_name }}" name="destination_name"
                            class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <div id="price" class="form-text">exchange rate with (USD)</div>
                        <input type="text" value="{{ $data->price }}" name="price" class="form-control"
                            id="price">
                    </div>
                    <div class="mb-3">
                        <label for="shortDescription" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_descript" id="shortDescription" rows="2" maxlength="100">{{ $data->short_descript }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="detailsDescription" class="form-label">Details Description</label>
                        <textarea class="form-control" name="details_descript" id="detailsDescription" rows="3">{{ $data->details_descript }}</textarea>
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
                            @foreach ($photo->details as $item)
                                <div class="row align-items-center">
                                    <div class="col">
                                        <img src="{{ asset('storage/' . $item['foto_detail']) }}" width="300px"
                                            class="d-block mb-3" alt="...">
                                    </div>
                                    <div class="co">
                                        <a href="{{ route('delete-photo', $item['id']) }}" class="btn btn-danger"><i
                                                class="bi bi-trash"></i>Delete</a>
                                    </div>
                                </div>
                            @endforeach
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
