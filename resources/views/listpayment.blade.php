@extends('layout')
@section('content')
    <section style="margin-top: 6em">
        <div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Total Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($billing as $displaydata)
    <tr>
      <td>{{$displaydata->total_price}}</td>
      <td><a href="{{url('mypaymentdetaillist')}}?id={{$displaydata->id}}" class="btn btn-info">View Details</a></td>
    </tr>
@endforeach
  </tbody>
</table>
</div></section>
@endsection()