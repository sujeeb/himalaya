@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Package ID</th>
      <th scope="col">Summary Title</th>
      <th scope="col">Summary Location</th>
      <th scope="col">Summary Details</th>
      <th scope="col">Summary Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($summarydata as $displaydata)
    <tr>
      <td>{{$displaydata->package_id}}</td>
      <td>{{$displaydata->summary_title}}</td>
      <td>{{$displaydata->summary_location}}</td>
      <td>{{$displaydata->summary_detail}}</td>
      <td>{{$displaydata->summary_status}}</td>
       <td>
                    <a class='btn btn-info btn-xs' href="{{route('package.edit', $displaydata->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <form action="{{route('package.destroy', $displaydata->id)}}" method="POST">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>
                    </form></td>

    </tr>
@endforeach
  </tbody>
@endsection()