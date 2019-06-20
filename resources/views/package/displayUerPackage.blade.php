@extends('layout_admin')
@section('content')
  <section style="margin-top: 6em">
    <div class="container">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th scope="col">User</th>
          <th scope="col">Package</th>
          <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allpackages as $packagedata)
          <tr>
            <td>{{$packagedata->user->name}}</td>
            <td>{{$packagedata->package->package_title}}</td>
            <td>{{$packagedata->created_at}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div></section>
@endsection()