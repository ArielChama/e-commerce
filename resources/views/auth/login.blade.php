@extends('layouts.logins')

@section('title', 'Entrar')

@section('content')
    <section>
        <div class="container">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img src="/img/undraw_Login_re_4vu2.svg" alt="" class="w-100">
                    </div>

                    <div class="col-md-6">
                        <div>
                            <h3>Iniciar sessão</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4">
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control form-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Email: ">
                                    </div>
                                    
                                    @error('email')
                                        <span class="text-danger">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control form-input @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Palavra-passe: ">
                                    </div>

                                    @error('password')
                                        <span class="text-danger">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>    

                                <div class="form-check text-center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection