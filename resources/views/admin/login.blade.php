@extends('layouts.logins')

@section('title', 'Paínel admin')

@section('content')
<section>
    <div class="">
        <div class="card card-login col-md-3">
            <div class="card-head pt-4">
                <h4 class="text-center">Paínel Administrativo</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div>
                        <input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" placeholder="Email: ">
                        
                        @error('email')
                            <span class="text-danger">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    
                    <div>
                        <input type="password" name="password" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="Palavra-passe: ">       
                        
                        @error('password')
                            <span class="text-danger">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection