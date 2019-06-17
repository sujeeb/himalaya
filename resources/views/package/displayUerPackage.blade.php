@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Package Type</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($allpackages as $packagedata)
    <tr>
      <td>{{$packagedata->user_id}}</td>
      <td>{{$packagedata->package_id}}</td>
    </tr>
@endforeach
  </tbody>
@endsection()