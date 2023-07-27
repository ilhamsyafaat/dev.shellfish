@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Add City</h1>
            </div>
            <form action="{{route('store-city')}}" method="POST">
              @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">City Name</label>
                        <input type="text" class="form-control" name="city" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
                </div>
            </form>

        </div>
    </div>

    {{-- list --}}

    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h3 mb-0 text-gray-800">List City</h1>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item => $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->city }}</td>
                                <td>
                                    <a id="delete" href="{{route('delete-city',$row->id)}}" type="button"  class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
