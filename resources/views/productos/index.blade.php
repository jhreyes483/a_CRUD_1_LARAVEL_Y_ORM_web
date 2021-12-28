@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Categorias</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('msg'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <i class="fas fa-times-circle"></i> {{session('msg')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="card">
                        <div class="card-body">
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef" class="text-white-all">
                                <th style="display: none;">ID</th>
                                <th >Producto</th>
                                <th>Valor</th>
                                <th>stok</th>
                                <th >Estado</th>
                                <th>Categoria</th>
                                <th >Creado en:</th>
                                <th >Actualizado en:</th>
                                <th style="display: none" >Acciones</th>



                              </thead>
                              <tbody>
                            @foreach ($productos as $c)
                            <tr>
                                <td style="display: none;">{{ $c->id_producto }}</td>
                                <td>{{ $c->nom }}</td>
                                <td>{{ $c->val }}</td>
                                <td>{{ $c->stok }}</td>
                                <td>{{ $c->estado }}</td>
                                <td>{{ $c->categoria['nom_categoria'] }}</td>
                                <td>{{ $c->created_at }}</td>
                                <td>{{ $c->updated_at }}</td>

                                <td style="display: none" >
                                    <form action="{{ route('categorias.destroy',$c->id_categoria) }}" method="POST">
                                        <a class="btn btn-success" href="{{ route('categorias.edit',$c->id_categoria ) }}">Editar</a>
                                        <a class="btn btn-info" href="{{ route('categorias.show',$c->id_categoria ) }}">Detalle</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $productos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
