@extends('layouts.formulario')

@section('content')
<div class="col-lg-6">
    <img src="{{ asset('storage').'/'.$blog->image }}" alt="" class="img-fluid">
</div>
<div class="col-lg-6">
    <h4 class="h2 text-center mb-3">Editar Blog</h4>
    <div class="row">

        <div class="col-12">
            <form action="{{ url('/blog/'.$blog->id )}}" class="form-group" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH')}}

                <div class="form-row">
                    <div class="col-md-12">
                        <fieldset
                            class="form-label-group form-group position-relative has-icon-left">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Titulo" value="{{ $blog->name }}">
                            <div class="form-control-position">
                                <i class="feather icon-file"></i>
                            </div>
                            <label for="name">Titulo</label>
                        </fieldset>
                    </div>
        
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="category"> Categoria </label>
                            <select class="form-control" name="category" id="category">
                                <option value="{{ $blog->category }}" selected hidden>{{ $blog->category == '1' ? 'Fotografìa' : 'Noticia' }}</option>
                                <option value="1">Fotografìa</option>
                                <option value="2">Noticia</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3 mx-auto">
                        {{-- <div
                            class="row align-items-center">
                            <div class="col-md-6 text-center"><img src="{{ asset('storage').'/'.$blog->image }}" width="120" alt="img blog"></div>
                            
                        </div> --}}
                        <input type="file" name="image" id="image">
                    </div>
        
                    <div class="col-12">
                        <fieldset class="form-label-group">
                            <textarea class="form-control" name="description" id="description" rows="3"
                                placeholder="Descripción">{{ $blog->description }}</textarea>
                            <label for="description">Descripción</label>
                        </fieldset>
                    </div>
        
        
        
                    <div class="col-12">
        
                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="btn btn-primary">Editar</button>
                            {{-- <button class="btn btn-outline-danger" onclick="return view('/blog')">Cancelar</button> --}}
                        </div>
                    </div>
                </div>
                
            </form>

        </div>


    </div>

</div>
@endsection