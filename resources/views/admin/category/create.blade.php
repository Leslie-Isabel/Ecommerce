@extends('layouts.admin')
@section('title', 'Registrar categoria')
@section('style')

@endsection

@section('options')

@endsection

@section('preferences')

@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Registrar categoria
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel de administración</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorias</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registrar categorias</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Registrar categoria</h4>
                    {{--<i class="fas fa-ellipsis-v"></i>--}}
                
                </div>
                {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
                @include('admin.category._form')
                <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                <a href="{{route('categories.index')}}"class="btn btn-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
   
@endsection
