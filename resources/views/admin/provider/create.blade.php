@extends('layouts.admin')
@section('title', 'Registrar proveedor')
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
                Registrar proveedor
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel de administración</a></li>
                    <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Proveedores</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registrar proveedores</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Registrar proveedor</h4>
                    {{--<i class="fas fa-ellipsis-v"></i>--}}
                
                </div>
                {!! Form::open(['route'=>'providers.store','method'=>'POST']) !!}
                
                {{-- 'name', 'email',
        'document','address','phone'--}}
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name')
                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="email">Correo</label>
                  <input type="email" class="form-control" value="{{ old('email') }}"name="email" id="email" placeholder="ejemplo@gmail.com" required>
                    @error('email')
                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="document">Cédula</label>
                    <input type="number" name="document" id="document" class="form-control" value="{{ old('document') }}" required>
                    @error('document')
                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control"  required>
                    @error('addres')
                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="number" name="phone" id="phone" value="{{ old('phone') }}" class="form-control"  required>
                    @error('phone')
                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                



                <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                <a href="{{route('providers.index')}}"class="btn btn-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
   
@endsection
