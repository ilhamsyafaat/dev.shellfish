@extends('admin.master')

@section('content')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="h3 mb-0 text-gray-800">List Special Offers</h1>
              <a href="{{ route('add-specialoffers') }}"><button type="button" class="btn btn-outline-primary"><i class="bi bi-plus-circle"></i> Add </button></a>
            </div>
          </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($data as $item =>$row)
                        <th scope="row">1</th>
                        <td><img src="{{asset('storage/'.$row->picture)}}" width="100px" alt=""></td>
                        <td>
                            <a href="{{ route('edit-specialoffers',$row->id) }}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Detail</button></a>
                            <a id="delete" type="button" href="{{route('destroy-specialoffers',$row->id)}}" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
                        </td>
                        @endforeach
                       
                      </tr>
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection
@endsection