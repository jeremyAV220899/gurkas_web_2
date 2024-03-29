@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Grado de Instrucción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos de Grado de Instrucción</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('grado.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Descripción</label>
                                        <input type="text" id="descripcion" name="descripcion" class="form-control"
                                            required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END modal -->

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Administrador</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sistemas</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearGrado" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar
                    Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lista de Estados</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered tablaGrado">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Grado de Institución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grados as $ids => $grado)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $ids + 1 }}</td>
                                <td>{{ $grado->descripcion }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <button class="btn text-warning btnEditar" type="button"
                                            data-id="{{ $grado->id }}" data-bs-toggle="modal"
                                            data-bs-target="#registrar">
                                            <i class="bi bi-pencil-fill">
                                            </i>
                                        </button>
                                        <button class="btn text-danger btnBorrar" title="Eliminar" type="button"
                                            data-id="{{ $grado->id }}">
                                            <i class="bi bi-trash-fill">
                                            </i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('.btnCrearGrado').click(function() {
            let val_url = '/administrador/sistemas/grados/guardar';
            $('.titulo').html('Registrar Grado de Instrucción');
            $('.btnRegistrar').html('Registrar');
            $('#descripcion').val('');
            $('#formulario').attr('action', val_url);
            $('#registrar').modal('show');
        })

        $('.tablaGrado').on('click', '.btnEditar', function() {
            let val_id = $(this).data('id');
            let val_url = '/administrador/sistemas/grados/editar/' + val_id;
            $.get(val_url, function(res) {
                $('.titulo').html('Editar Grado de Instrucción');
                $('.btnRegistrar').html('Editar');
                $('#descripcion').val(res.grado.descripcion);
                $('#formulario').attr('action', '/administrador/sistemas/grados/actualizar/' + val_id);
                $('#registrar').modal('show');
            });
        });

        $('.tablaGrado').on('click', '.btnBorrar', function() {
            let id = $(this).data('id');
            let url = '/administrador/sistemas/grados/borrar/' + id;
            $.get(url, function(res) {
                if (res == 'ok') {
                    location.reload();
                } else {
                    toastr.warning('El Estado esta siendo usado en un registro', 'Error', {
                        "progressBar": true
                    });
                }
            });
        })
    </script>
@endsection
