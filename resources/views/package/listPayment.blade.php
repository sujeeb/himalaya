@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Package ID</th>
      <th scope="col">Total Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($billing as $displaydata)
    <tr>
      <td>{{$displaydata->user_id}}</td>
      <td>{{$displaydata->total_price}}</td>
      <td><a href="{{}}" class="btn btn-info">View Details</a></td>
    </tr>
@endforeach
  </tbody>
@endsection()