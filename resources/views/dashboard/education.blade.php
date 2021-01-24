@extends('dashboard.layout.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Education</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Institution Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Degree Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Start</label>
            <input type="month" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">End</label>
            <input type="month" class="form-control" id="exampleInputName1">
          </div>
          <button type="submit" class="mr-2 btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
