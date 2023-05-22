@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- <div class="card mb-2" align="center">
                <div class="card-header"><h2 class="text-info">{{ __('La chambotte') }}</h2></div>
            </div> --}}
            <div class="card" align="center">
                <div class="card-header"><h2>{{ __('Créer nouveau compte') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="row justify-content-center">
                        @csrf
                            <div class="col-md-12 mb-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom complet" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de pass" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 mb-4">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirmer mot de pass" name="password_confirmation" required autocomplete="new-password">
                            </div>



                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __("S'inscrire") }}
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
