@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Package ID</th>
      <th scope="col">Include detail</th>
      <th scope="col">Include status</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($includeExcludedata as $displaydata)
    <tr>
      <td>{{$displaydata->package_id}}</td>
      <td>{{$displaydata->include_detail}}</td>
      <td>{{$displaydata->include_status}}</td>
    </tr>
@endforeach
  </tbody>
@endsection()