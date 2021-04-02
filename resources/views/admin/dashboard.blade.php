@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <div class="pt-5 pb-5">
                <h3 class="text-center">Produtos</h3>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">
                                    Editar
                                </a>
                            </td>
                            
                            <td>
                                <a href="{{ route('admin.products.delete', $product->id) }}" class="btn btn-danger">
                                    Remover
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pt-5 pb-5">
                <h3 class="text-center">Usuários</h3>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Sexo</th>
                            <th>Número de telefone</th>
                            <th>Permissão</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->sex }}</td>
                            <td>{{ $user->number_phone }}</td>
                            @if ($user->isAdmin)
                                <td>Administrador</td>
                            @else
                                <td>Usuário normal</td>
                            @endif
                            <td>
                                <a href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-danger">
                                    Remover
                                </a>      
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection