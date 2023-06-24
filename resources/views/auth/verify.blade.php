@extends('layouts.app')

@section('content')
    <div class="auth-wrap">
        @include('auth.partials.auth-logo')

        <div class="card">
            <div class="card-body">
                <div class="text-center pt-0 pb-3 title">
                    <span>{{ __('Verifique su correo electronico') }}</span>
                </div>

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Refresque la pagina web..') }}
                    </div>
                @endif

                {{ __('Intentenlo mas tarde, el link pudo fallar.') }}
                {{ __('No has recibido ningùn correo.') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
@endsection
