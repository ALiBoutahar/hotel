@extends('layouts.app')

@section('content')
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- <div class="card mb-2" align="center">
                <div class="card-header"><h2 class="text-info">{{ __('La chambotte') }}</h2></div>
            </div> --}}
            <div class="card" align="center">
                <div class="card-header"><h2>{{ __('Connexion') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="row justify-content-center py-3">
                        @csrf

                        <div class="col-md-10 mb-3 py-2">
                            <input id="email" type="email" class="form-control" placeholder="E-mail" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3 py-2">
                            <input id="password" type="password" class="form-control "placeholder="Mot de pass" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-10 py-2" align="center">
                            <button type="submit" class="btn btn-primary col-md-12">
                                {{ __('Se Connecter') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
