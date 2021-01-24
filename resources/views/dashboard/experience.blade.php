@extends('dashboard.layout.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Key Skills</h4>

        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Company Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Position</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Join Date</label>
            <input type="month" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Leave Date</label>
            <input type="month" class="form-control" id="exampleInputName1">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Responsibility</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="mr-2 btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
