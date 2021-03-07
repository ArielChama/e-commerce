@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <div class="mt-4 mb-4">
                <h2>Novo produto</h2>
            </div>
            
            <div>
                <form action="{{ route('admin.products.registered')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                                <div class="mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Nome: " >
                                </div>
                                <div class="mb-4">
                                    <input type="number" name="price" class="form-control" placeholder="Preço: " >
                                </div>
                                
                                <div class="mb-4">
                                    <input type="number" name="quantity" class="form-control" placeholder="Quantidade: " >
                                </div>

                                <div class="mb-4">
                                    <select name="category" class="form-control">
                                        <option value="Eletrodomesticos">Eletrodomesticos</option>
                                        <option value="Aparelhos eletronicos">Aparelhos eletronicos</option>
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Descreve aqui: " ></textarea>
                                </div>

                                <div class="mb-4">
                                    <input type="file" name="image" class="form-control" placeholder="Image" >
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Criar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection