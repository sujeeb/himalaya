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
                <tr>
                    <td data-th="Product">
                        <div class="col-sm-12 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>


                    </td>
                    <td data-th="Quantity">
                        <div class="col-sm-10">
                            <h4 class="nomargin">Product 1</h4>
                        </div>
                    </td>
                    <td data-th="Price">$150.00</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                <tr>
                    <td data-th="Product">
                        <div class="col-sm-12 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>


                    </td>
                    <td data-th="Quantity">
                        <div class="col-sm-10">
                            <h4 class="nomargin">Product 1</h4>
                        </div>
                    </td>
                    <td data-th="Price">$150.00</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                <tr>
                    <td data-th="Product">
                        <div class="col-sm-12 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>


                    </td>
                    <td data-th="Quantity">
                        <div class="col-sm-10">
                            <h4 class="nomargin">Product 1</h4>
                        </div>
                    </td>
                    <td data-th="Price">$150.00</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td colspan="4" class="text-center"><strong>Total 1.99</strong></td>

                </tr>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="1" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong></strong></td>
                    <td><a href="https://www.paypal.com/webapps/shoppingcart?mfid=1546373779156_cb91e3a2b2dc7&flowlogging_id=cb91e3a2b2dc7#/checkout/shoppingCart" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </section>
@endsection()