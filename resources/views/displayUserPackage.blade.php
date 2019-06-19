@extends('layout')
@section('content')
<section style="margin-top: 6em">
        <div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Package Type</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($allpackages as $packagedata)
    <tr>
      <td>{{$packagedata->package_id}}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div></section>
@endsection()