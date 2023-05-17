{{-- views/user/index.blade.php --}}
@extends('base')

@section('title', 'Usuários')

@section('content')
<p>Página de usuários</p>

<a href="{{ route('user.create') }}" class="border border-blue-500 p-1">Adicionar usuário</a>
@endsection