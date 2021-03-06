@extends('content.layout.layout')

@section('css')

@endsection

@section('container')
	
	<div class="container">
        <header class="page-header">
            <h1 class="page-title">My Shopping Bag</h1>
        </header>
        <div class="row">
            <div class="col-md-10">
                <table class="table table table-shopping-cart">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Color/Size</th>
                            <th>Price</th>
                            <th>Quality</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                            </td>
                            <td>Green</td>
                            <td>$499</td>
                            <td>
                                <input class="form-control table-shopping-qty" type="text" value="1" />
                            </td>
                            <td>$499</td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Nikon D5200 24.1 MP Digital SLR Camera</a>
                            </td>
                            <td>Black</td>
                            <td>$350</td>
                            <td>
                                <input class="form-control table-shopping-qty" type="text" value="1" />
                            </td>
                            <td>$350</td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Apple 11.6" MacBook Air Notebook</a>
                            </td>
                            <td>Silver</td>
                            <td>$1100</td>
                            <td>
                                <input class="form-control table-shopping-qty" type="text" value="1" />
                            </td>
                            <td>$1100</td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Fossil Women's Original Boyfriend</a>
                            </td>
                            <td>Gold</td>
                            <td>$250</td>
                            <td>
                                <input class="form-control table-shopping-qty" type="text" value="1" />
                            </td>
                            <td>$250</td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="gap gap-small"></div>
            </div>
            <div class="col-md-2">
                <ul class="shopping-cart-total-list">
                    <li><span>Subtotal</span><span>$2199</span>
                    </li>
                    <li><span>Shopping</span><span>Free</span>
                    </li>
                    <li><span>Taxes</span><span>$0</span>
                    </li>
                    <li><span>Total</span><span>$2199</span>
                    </li>
                </ul><a class="btn btn-primary" href="#">Checkout</a>
            </div>
        </div>
        <ul class="list-inline">
            <li><a class="btn btn-default" href="#">Continue Shopping</a>
            </li>
            <li><a class="btn btn-default" href="#">Update Bag</a>
            </li>
        </ul>
    </div>
        
@endsection

@section('js')

@endsection