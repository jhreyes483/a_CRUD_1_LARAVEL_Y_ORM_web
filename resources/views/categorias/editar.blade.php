@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Categoria</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('categorias.update',$categoria->id_categoria) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Categoria</label>
                                   <input type="text" name="categoria" class="form-control" value="{{ $categoria->nom_categoria }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="contenido">Descripción</label>
                                <textarea class="form-control" name="descript" style="height: 100px">{{ $categoria->descript }}</textarea>

                            </div>
                        </div>



                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
