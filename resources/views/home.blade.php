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

                    {{ __('Inicio de seccion!') }}
                </div>

            </div>
            <h1 class="text-primary">uwu</h1>
            @if ( Auth::user()-> rolid == 2)
               Tu rol es la del  usuario
            @endif
            @if ( Auth::user()-> rolid == 1)
               Tu rol es del admin
            @endif

        </div>
    </div>
</div>
@endsection
