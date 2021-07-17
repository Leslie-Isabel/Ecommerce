@extends('layouts.admin')
@section('title', 'Información del producto')
@section('style')

@endsection

@section('options')

@endsection
@section('create')
   
@endsection

@section('preferences')

@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                {{$product->name}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel de administración</a></li>
                    <li class="breadcrumb-item"><a href="#">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="border-bottom text-center pb-4">

                                    <img src="{{asset('storage/photos/'.$product->image)}}" alt="product" class="img-lg rounded-circle mb-3">

                                    <h3>{{$product->name}}</h3>
                                </div>

                                <div class="border-bottom py-4">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active">
                                          Sobre Proveedor
                                        </button>
                                        <button type="button" class="list-group-item list-group-item-action">Productos</button>
                                        <button type="button" class="list-group-item list-group-item-action">Registrar Producto</button>
                                    </div>                                                            
                                </div>


                            </div>
                            <div class="col-lg-8 pl-lg-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Información del proveedor</h4>
                                    </div>
                                </div>
                                <div class="mt-4 py-2 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <strong> <i class="fa fa-user-circle" aria-hidden="true"></i> Nombre</strong>
                                            <p class="text-muted"> {{$product->name}} </p>
                                            <hr>
                                            <strong><i class="fa fa-envelope" aria-hidden="true"></i> Correo</strong>
                                            <p class="text-muted">{{$product->email}}</p>
                                            <hr>
                                            <strong><i class="fa fa-address-card" aria-hidden="true"></i> Número de documento</strong>
                                            <p class="text-muted">{{$product->document}}</p>
                                            <hr>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <strong><i class="fa fa-phone" aria-hidden="true"></i> Teléfono</strong>
                                            <p class="text-muted">{{$product->phone}}</p>
                                            <hr>
                                            <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección</strong>
                                            <p class="text-muted">{{$product->address}}</p>
                                            <hr>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{route('products.index')}}" class="btn btn-primary float-right">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src={{asset('Melody/js/profile-demo.js')}}></script>
@endsection
