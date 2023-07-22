@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between ">
        <h1 class="h3 mb-0 text-gray-800">Add Special Offers</h1>
      </div>
      </div>
  
      <div class="card-body">
      <form>
          <div class="mb-3">
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file"
             id="avatar" name="avatar"
             accept="image/png, image/jpeg, image/svg"></div>
          </div>
        </form>
      </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
    </div>
  </div>

@endsection