@extends('navigation')

@section('carrito')

    <!-- Dropdown Menu - Mega Menu -->
    <ul class="dropdown-menu dropdown-menu-right dropdown-cart" role="menu">
        @foreach ($items as $item)
            <li>
                <span class="item">
                    <span class="item-left">
                        <span class="item-info">
                            <span>{{ $item->name }}</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <span>{{ number_format($item->price,2,',','.') }} €</span>
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
            </li>
        @endforeach
        <li><span class="item"><a class="btn btn-primary btn-block" href="">Ver Pedido</a></span></li>
    </ul>

@endsection
