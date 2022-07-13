@extends('layouts.app')

@section('content')
<div class="container py-5">
    

@if ( Auth::user())

<script type="text/javascript">
    setTimeout(function() {
        window.location.replace("/home");
    }, 0);
</script>

@else
<div class="card text-center py-5">
        <h1 >Hola usuario.</h1>
        <h2 >Para usar el sistema necesita <b>Iniciar Sesion</b></h2>
        
@endif
    </div>

@endsection
