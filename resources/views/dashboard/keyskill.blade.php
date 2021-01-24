@extends('dashboard.layout.master')


@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Key Skills</h4>

        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Skill</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Percentage</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Percentage">
          </div>
          <button type="submit" class="mr-2 btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
