@extends('layout')

@section('content')
    <section style="margin-top: 6em">
        <div class="container">
            <div class="row">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:25%">Image</th>
                    <th style="width:25%">Product</th>
                    <th style="width:25%">Price</th>
                    <th style="width:25%">Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php $total =  0; 
                if(count($packages) > 0){
                ?>
                @foreach($packages as $package)

                <tr>
                    <td data-th="Product">
                        <div class="col-sm-12 hidden-xs"><img src="{{asset('images')}}/{{$package->package_title_image}}" width="100px" height="100px" alt="..." class="img-responsive"/></div>
                    </td>
                    
                    <td data-th="Quantity">
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{$package->package_title}}</h4>
                        </div>
                    </td>
                    <td data-th="Price">{{$package->package_price}}</td>
                    <td class="actions" data-th="">
                        <a href="{{url('removePackage')}}?package_id={{$package->id}}"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <?php $total += $package->package_price; ?>
                @endforeach
                <?php
            }
            else{
?>
<tr class="visible-xs">
                    <td colspan="4" class="text-center"><strong>Cart is empty!</strong></td>

                </tr>
<?php
            }
                ?>
                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td colspan="4" class="text-center"><strong>Total {{$total}}</strong></td>

                </tr>
                <tr>
                    <td><a href="{{url('/')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="1" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong></strong></td>
                    <td><a href="{{url('/payment')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </section>

@endsection()