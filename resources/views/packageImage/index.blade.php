@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Package ID</th>
      <th scope="col">Image title</th>
      <th scope="col">Image name</th>
      <th scope="col">Image status</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($imagedata as $displaydata)
    <tr>
      <td>{{$displaydata->package_id}}</td>
      <td>{{$displaydata->image_title}}</td>
      <td>{{$displaydata->image_name}}</td>
      <td>{{$displaydata->image_status}}</td>
    </tr>
@endforeach
  </tbody>
@endsection()