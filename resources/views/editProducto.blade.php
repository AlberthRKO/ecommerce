@extends('layouts.formulario')

@section('content')
<div class="col-lg-6">
    <img src="{{ asset('storage').'/'.$producto->image }}" alt="" class="img-fluid">
</div>
<div class="col-lg-6">
    <h4 class="h2 text-center mb-3">Editar Producto</h4>
    <div class="row">

        <div class="col-12">
            <form action="{{ url('/productos/'.$producto->id )}}" class="form-group" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH')}}

                <div class="form-row">
                    <div class="col-md-12">
                        <fieldset
                            class="form-label-group form-group position-relative has-icon-left">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nombres" value="{{ $producto->name }}">
                            <div class="form-control-position">
                                <i class="feather icon-user"></i>
                            </div>
                            <label for="name">Nombre</label>
                        </fieldset>
                    </div>
        
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category"> Categoria </label>
                            <select class="form-control" name="category" id="category">
                                <option value="{{ $producto->category }}" selected hidden>{{ $producto->category == '1' ? 'Aire' : ($producto->category == '2' ? 'Gas' : 'Calefacción') }}</option>
                                <option value="1">Aire</option>
                                <option value="2">Gas</option>
                                <option value="3">Calefacción</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status">Estado</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">En Stock</option>
                                <option value="{{ $producto->status }}" selected hidden>{{ $producto->status == '1' ? 'En Stock' : ($producto->status == '2' ? 'Agotado' : 'Deshabilitado') }}</option>
                                <option value="2">Agotado</option>
                                <option value="3">Deshabilitado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price"
                                placeholder="Precio" name="price" min="1" pattern="^[0-9]+" value="{{ $producto->price }}">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3 mx-auto">
                        {{-- <div
                            class="row align-items-center">
                            <div class="col-md-6 text-center"><img src="{{ asset('storage').'/'.$producto->image }}" width="120" alt="img producto"></div>
                            
                        </div> --}}
                        <input type="file" name="image" id="image">
                    </div>
        
                    <div class="col-12">
                        <fieldset class="form-label-group">
                            <textarea class="form-control" name="description" id="description" rows="3"
                                placeholder="Descripción">{{ $producto->description }}</textarea>
                            <label for="description">Descripción</label>
                        </fieldset>
                    </div>
        
        
        
                    <div class="col-12">
        
                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="btn btn-primary">Editar</button>
                            {{-- <button class="btn btn-outline-danger" onclick="return view('productos')">Cancelar</button> --}}
                        </div>
                    </div>
                </div>
                
            </form>

        </div>


    </div>

</div>
@endsection