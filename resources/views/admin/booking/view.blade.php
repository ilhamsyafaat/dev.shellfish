@extends('admin.master')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800">Booking</h1>

        <div class="row">
            <div class="col-md-5">
                <form action={{ Route('booking-search') }} method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ isset($search)? $search : '' }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                </form>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Booking</h6>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Firstname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item => $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->firstname}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>
                                        <a href="{{ route('booking-detail',$row->id) }}" id="...." ><button type="button"
                                                class="btn btn-warning"><i class="bi bi-pencil-square"></i>Detail</button></a>
                                        <a href="{{route('booking-delete', $row->id)}}" id="delete" data-confirm-delete="true" ><button type="button"
                                                class="btn btn-danger delete"><i class="bi bi-trash"></i>Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </div>

    {{-- @else
        <p class="text-center fs-4">Data Booking Not Found.</p>
    @endif --}}

@endsection

