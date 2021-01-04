@extends('layouts.appregister')

@section('content')    
@if($error)
    <div class="alert alert-danger" role="alert">
        Cantidad de {{$producto->nombre}} no disponible en nuestro stock, Solo contamos con {{$producto->stock}} unidades
    </div>
@endif
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('images/'.$item->image)}}" alt="">
                                        <h5>{{ $item->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Bs.{{ $item->price }}
                                    </td>

                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">

                                            <form action="{{ route('cart.update', $item->id ) }}">
                                                
                                                <div class="product__details__quantity">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="number" name="quantity" value="{{ $item->quantity }}">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <button  type="submit" class="btn btn-primary btn-sm">Modificar</button></a> 

                                                 

                                            </form>

                                              

                                        </div>
                                    </td>

                                    <td class="shoping__cart__total">
                                        Bs. {{Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <a href="{{ route('cart.destroy', $item->id ) }}"><span class="icon_close"></span></a>
                                        
                                    </td>
                                </tr>
                                
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total del Carrito</h5>
                        <ul>
                            <li>Subtotal <span>Bs. {{\Cart::session(auth()->id())->getSubTotal()}}</span></li>
                            <li>Total <span>Bs. {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                        </ul>
                        <a href="{{route('cart.checkout')}}" class="primary-btn">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
