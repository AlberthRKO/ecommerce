@extends('layouts.contenido')
@section('content')
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="row flexbox-container">
            <div class="col-xl-8 col-10 d-flex justify-content-center">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-0">
                        <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                            <img src="app-assets/images/pages/register.jpg" alt="branding logo">
                        </div>
                        <div class="col-lg-6 col-12 p-0">
                            <div class="card rounded-0 mb-0 p-2">
                                <div class="card-header pt-50 pb-1">
                                    <div class="card-title mx-auto">
                                        <h4 class="mb-0">Crear cuenta</h4>
                                    </div>
                                </div>
                                <p class="px-2 mb-2 text-center">Necesitas una cuenta para poder acceder al sistema.</p>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-label-group">
                                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                                    placeholder="Nombre" name="name" value="{{ old('name') }}" autocomplete="name">
                                                <label for="inputName">Usuario</label>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                                                    placeholder="Usuario" name="username" value="{{ old('username') }}" autocomplete="username">
                                                <label for="inputUsername">Usuario</label>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <input type="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                                <label for="inputEmail">Email</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" id="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                                <label for="inputPassword">Contraseña</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" autocomplete="new-password">
                                                <label for="inputConfPassword">Confirmar Contraseña</label>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                            <input type="checkbox" checked>
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                            <span class=""> Acepto los terminos y condiciones</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <a href="login"
                                                class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                            <button type="submit"
                                                class="btn btn-primary float-right btn-inline mb-50">Registrar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection