@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                  <h1 class="h3 mb-0 text-gray-800">List Destination</h1>
                  <a href="{{ url('admin/add-transportation') }}"><button type="button" class="btn btn-outline-primary"><i class="bi bi-plus-circle"></i> Add </button></a>
                </div>
              </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdoasda</td>
                            <td>
                                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</button>
                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
@endsection