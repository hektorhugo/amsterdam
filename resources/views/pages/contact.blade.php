@extends('layouts.default')
@section('content')
<div class="fondo_negro">
<h1>Contacto</h1>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(['route' => 'contact.store', 'method' => 'POST','class' => 'form']) !!}

<div class="form-group">
    {!! Form::label('Nombre:') !!}
    {!! Form::text('name', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Tu nombre')) !!}
</div>

<div class="form-group">
    {!! Form::label('Correo:') !!}
    {!! Form::email('email', null,
        array('required',
              'class'=>'form-control', 'pattern'=>'[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}',
              'placeholder'=>'Tu correo electrónico')) !!}
</div>

<div class="form-group">
    {!! Form::label('Mensaje:') !!}
    {!! Form::textarea('mensaje', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Tu mensaje')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contáctanos',
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
</div>
@stop
