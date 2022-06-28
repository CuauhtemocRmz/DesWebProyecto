@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Iniciaste sesión!') }}
                </div>

            </div>
            <h1 class="text-primary">uwu</h1>
            @if ( Auth::user()-> rolid == 2)
               Tu rol es usuario
            @endif
            @if ( Auth::user()-> rolid == 1)
               Tu rol es admin
            @endif

        </div>
    </div>
</div>
@endsection
