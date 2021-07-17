@extends('layouts.admin')
@section('title', 'Gestión de categorias')
@section('style')

@endsection

@section('options')

@endsection
@section('create')
    <li class="nav-item d-none d-lg-flex">
        <a class="nav-link" href="{{ route('categories.create') }}">
            <span class="btn btn-primary"> <i class="fa fa-plus"></i> Crear nuevo</span>
        </a>
    </li>
@endsection

@section('preferences')

@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Profile
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Sample Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                    <h3>Nombre Proveedor</h3>
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
                                <h4>Información del proveedor</h4>
                                <div class="mt-4 py-2 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <strong> <i class="fa fa-user-circle" aria-hidden="true"></i> Nombre</strong>
                                            <p class="text-muted"></p>
                                            <hr>
                                            <strong><i class="fa fa-id-card" aria-hidden="true"></i> Tipo de documento</strong>
                                            <p class="text-muted"></p>
                                            <hr>
                                            <strong><i class="fa fa-address-card" aria-hidden="true"></i> Número de documento</strong>
                                            <p class="text-muted"></p>
                                            <hr>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <strong><i class="fa fa-phone" aria-hidden="true"></i> Teléfono</strong>
                                            <p class="text-muted"></p>
                                            <hr>
                                            <strong><i class="fa fa-envelope" aria-hidden="true"></i> Correo</strong>
                                            <p class="text-muted"></p>
                                            <hr>
                                            <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección</strong>
                                            <p class="text-muted"></p>
                                            <hr>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src={{asset('Melody/js/profile-demo.js')}}></script>
@endsection
