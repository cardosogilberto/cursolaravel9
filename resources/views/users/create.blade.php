@extends('layouts.app')

@section('title','Novo Usuario')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo usuario {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('users._partials.form')
</form>

@endsection
