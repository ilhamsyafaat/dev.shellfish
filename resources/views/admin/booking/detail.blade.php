@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <fieldset disabled="disabled">
                <div class="mb-3">
                        <label for="title" class="form-label">Book Kode</label>
                        <input type="text" class="form-control" id="title" value="sadas">
                    </div>
                <div class="mb-3">
                    <label for="title" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="row mb-3 ml-1">
                    <div class="mr-3">
                        <label for="title" class="form-label">Start Date</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="">
                        <label for="title" class="form-label">End Date</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Email</label>
                    <input type="email" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Participant</label>
                    <input type="number" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Phone</label>
                    <input type="phone" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Country</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Message</label>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>
                
            </fieldset>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{ url('/admin/view/booking') }}"><button type="button" class="btn btn-primary">Back</button></a>
            </div>
            </div>
        </div>
    </div>
@endsection