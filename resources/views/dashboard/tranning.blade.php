@extends('dashboard.layout.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Traning</h4>

        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Institution</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Traning Topics</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Start Date</label>
            <input type="month" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">End Date</label>
            <input type="month" class="form-control" id="exampleInputName1">
          </div>
          <button type="submit" class="mr-2 btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
