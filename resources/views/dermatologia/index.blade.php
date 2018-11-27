@extends('adminlte::page')
@section('title')dermatologia @stop
@section('content')


 <dermatologia :valor="{{$valor_orden_derma}}" :valor2="{{$idpaciente}}" :atendido="{{$atendido}}"></dermatologia>
  
</div>
  
@stop

