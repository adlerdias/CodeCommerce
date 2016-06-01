@extends('store.store')

@section('content')
    <section class="cart_items">
        <div class="container">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="price">Quantidade</td>
                            <td class="price">SubTotal</td>
                            <td>&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($cart->all() as $k=>$item)
                        <tr class="product{{$k}}">
                            <td class="cart_product">
                                <a href="{{ route('store.product', ['id'=>$k]) }}">
                                    teste
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{{ route('store.product', ['id'=>$k]) }}">{{ $item['name'] }}</a></h4>
                                <p>Código: {{ $k  }}</p>
                            </td>
                            <td class="cart_price">
                                R$ {{ number_format($item['price'],2,',','.') }}
                            </td>
                            <td class="cart_quantity col-xs-1 col-md-1 col-sm-1">
                                {!! Form::text(
                                        'qtd',
                                        $item['qtd'],
                                        [
                                            'class'=>'form-control col-xs-2 col-md-2 col-sm-2',
                                            'id' => $k,
                                        ]
                                ) !!}
                            </td>
                            <td class="cart_cart_total">
                                <p id="item_price{{$k}}" class="cart_total_price"> R$ {{ number_format($item['price'] * $item['qtd'],2,',','.') }}</p>
                            </td>
                            <td class="cart_delete">
                                <a href="{{ route('cart.destroy', ['id'=>$k]) }}" class="cart_quantity_delete">Delete</a>
                                <a id="btn-update" data-attr-product_id="{{$k}}" href="{{ route('cart.update', ['id'=>$k]) }}" class="quantity">Atualizar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="cart_product">
                                <p>Nenhum item encontrado</p>
                            </td>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="3">
                            &nbsp;
                        </td>
                        <td>
                            <span class="pull-right"><strong>Total:</strong></span>
                        </td>
                        <td>
                            <span id="total">R$ {{ number_format($cart->getTotal(),2,',','.') }}</span>
                        </td>
                        <td>
                            <a href="{{ route('checkout.place') }}" title="Finalizar Compra" class="btn btn-success">
                                Fechar a Conta
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop


@section('javascript')
    <script>
        $(document).ready(function () {
            $('.quantity').on('click', function(event) {
                event.preventDefault();
                var id = $(this).attr('data-attr-product_id');
                var quantity = $('input#'+id).val();
                var url = $(this).attr('href');

                $.ajax({
                    method: "GET",
                    url: url + '/' +  quantity,
                    data: {},
                    success: function(result) {
                        if (result.success) {
                            $('#item_price' + id).text('R$ ' + result.price);
                            $('#total').text('R$ ' + result.total);
                            if (quantity == 0) {
                                $('.product'+id).remove();
                            }
                        } else {
                            alert("Desculpe-nos o transtorno, mas não foi possível atualiza o carrinho.");
                        }
                    }
                });

                return false;
            });
        });
    </script>
@endsection