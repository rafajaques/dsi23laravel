{{-- views/user/create.blade.php --}}
@extends('base')

@section('title', 'Usuários')

@section('content')

    <form action="{{ route('user.create')}}" method="post">
    
        @csrf

        <input type="text" name="name" placeholder="Username" class="mb-2">

        <br> <!-- Isso não se faz -->

        <input type="password" name="password" placeholder="Senha" class="mb-2">

        <br> <!-- Isso não se faz -->

        <input type="email" name="email" placeholder="E-mail" class="mb-2">

        <br> <!-- Isso não se faz -->

        <input type="submit" value="Gravar" class="mb-2 bg-green-500 p-2 rounded-lg cursor-pointer">
    
    </form>

@endsection