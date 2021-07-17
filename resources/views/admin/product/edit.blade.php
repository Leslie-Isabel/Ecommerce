@extends('layouts.admin')
@section('title', 'Editar producto')
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
                Editar producto
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel de administración</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar producto</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Editar produto</h4>
                    {{-- <i class="fas fa-ellipsis-v"></i> --}}

                </div>

                {!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT', 'files' => true]) !!}

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}"
                        required>
                    @error('name')
                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sell_price">Precio de Venta</label>
                    <input type="number" name="sell_price" id="sell_price" class="form-control"
                        value="{{ old('sell_price', $product->sell_price) }}" required>
                    @error('sell_price')
                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="provider_id">Proveedor</label>
                    <select class="form-control" name="provider_id" id="provider_id">
                        @foreach ($providers as $provider)
                            <option value="{{ $provider->id }}" 
                                @if ($provider->id == $product->provider_id) selected @endif>
                        {{ $provider->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="card-body">
                    <h4 class="card-title d-flex">Seleccionar Archivo
                        @error('image')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </h4>
                    <input type="file" value="{{$product->image}}" name="picture" id="picture" class="dropify" />
                </div>

               


                <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                <a href="{{ route('products.index') }}" class="btn btn-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
<script src="{{asset('Melody/js/dropify.js')}}"></script>
@endsection
