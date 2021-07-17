@extends('layouts.admin')
@section('title', 'Editar categoria')
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
                Editar categoria
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel de administración</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorias</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar categorias</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Editar categoria</h4>
                    {{--<i class="fas fa-ellipsis-v"></i>--}}
                
                </div>
                {!! Form::model($category,['route'=>['categories.update',$category],'method'=>'PUT']) !!}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{old('name',$category->name)}}" class="form-control" placeholder="Nombre" required>
                      
                </div>
                <div class="form-group">
                  <label for="description">Descripción</label>
                  <textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                <a href="{{route('categories.index')}}"class="btn btn-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
   
@endsection
