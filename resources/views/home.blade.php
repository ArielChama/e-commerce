@extends('layouts.app')

@section('title', 'Página inicial')
    
@section('content')
    <section>
        <div class="container">
            <div class="pt-5 mt-5 mb-5 pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/img/undraw_web_shopping_dd4l.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-center mt-5">
                        <div class="pt-5">
                            <h1 class=" ">Vai as compras, sem sair de casa</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5 pb-5">
                <div class="">
                    <h2 class="text-center mb-5">Últimos lançamentos</h2>
                    <div class="">
                        <div class="row">
                            @php
                                $count = 0
                            @endphp
                            @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="storage/products/{{ $product->image }}" alt="" class="image-fluid image-product">
                                    <div class="card-body">
                                        <h5 class="text-center">{{ $product->name }}</h5>
                                        
                                        <a href="{{ route('products.view', $product->id) }}" class="btn btn-primary btn-block mt-3">
                                            Comprar
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @php
                                $count++;
                                if ($count == 4) {
                                    break;
                                }
                            @endphp
                            @endforeach
                        </div>

                        <div class="mt-5 text-center">
                            <a href="{{ route('products.list') }}" class="btn btn-primary w-25">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
