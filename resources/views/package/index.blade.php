@extends('layout_admin')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Image Title</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($packagedata as $displaydata)
    <tr>
      <td>{{$displaydata->package_title}}</td>
      <td>{{$displaydata->package_description}}</td>
      <td>{{$displaydata->package_price}}</td>
      <td>{{$displaydata->status}}</td>
      <td>{{$displaydata->package_title_image}}</td>
      <td>{{$displaydata->package_type}}</td>
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