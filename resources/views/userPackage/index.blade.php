@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">Package</th>
      <th scope="col">Amount</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($packagedata as $displaydata)
    <tr>
      <td>{{$displaydata->user_id}}</td>
      <td>{{$displaydata->package_id}}</td>
      <td>{{$displaydata->total_price}}</td>
      
    </tr>
@endforeach
  </tbody>
@endsection()