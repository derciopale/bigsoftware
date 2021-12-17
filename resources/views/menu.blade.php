


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
         
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}"> Criar Novo Post</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Titulo</th>
        <th>Descricao</th>
    </tr>
    {{-- @foreach ($posts as $post)
    <tr>
        <td>{{ $post->titulo }}</td>
        <td>{{ $post->descricao }}</td>
        <td>
             <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Editar</a>
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Apagar</button>
            </form>
        </td>
    </tr>
    @endforeach --}}
</table>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop