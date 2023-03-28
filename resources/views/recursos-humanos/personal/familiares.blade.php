@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Datos Familiares</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Del Empleado</h6>
                                <hr />
                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 select2-sm col-12">
                                        <label class="form-label">Buscar Personal</label>
                                        <select class="single-select select2" id="name" name="name">
                                            <option value="" selected>----Seleccionar----</option>
                                            @foreach ($empleados as $empleado)
                                                <option value="{{ $empleado->id }}">{{ $empleado->nombre_completo }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">N° Hijos</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="1">1 Hijo</option>
                                            <option value="2">2 Hijo</option>
                                            <option value="3">3 Hijo</option>
                                            <option value="4">4 Hijo</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Familiares</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Esposa(o)/Concubina(o)</label>
                                        <input type="text" class="form-control" id="pareja" name="pareja">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">DNI</label>
                                        <input type="text" class="form-control" id="dniPareja" name="dniPareja">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Hijo(a) 1</label>
                                        <input type="text" class="form-control" id="hijo1" name="hijo1">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">DNI 1</label>
                                        <input type="text" class="form-control" id="dni1" name="dni1">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Hijo(a) 2</label>
                                        <input type="text" class="form-control" id="hijo2" name="hijo2">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">DNI 2</label>
                                        <input type="text" class="form-control" id="dni2" name="dni2">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Hijo(a) 3</label>
                                        <input type="text" class="form-control" id="hijo3" name="hijo3">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">DNI 3</label>
                                        <input type="text" class="form-control" id="dni3" name="dni3">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Hijo(a) 4</label>
                                        <input type="text" class="form-control" id="hijo4" name="hijo4">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">DNI 4</label>
                                        <input type="text" class="form-control" id="dni4" name="dni4">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerra</button>
                    <button type="button" class="btn btn-primary btnRegistrar">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Recursos Humanos</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Personal</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lista de Datos Familiares</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 100.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 260.094px;">Esposa(o) / Concubina(a)</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">DNI Esposa</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">AVP71269685</td>
                                        <td>Juan Manuel</td>
                                        <td>5854745</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">AVP71269685</td>
                                        <td>Juan Manuel</td>
                                        <td>5854745</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">AVP71269685</td>
                                        <td>Juan Manuel</td>
                                        <td>5854745</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/gurkas/RRHH/Personal/familiares.js"></script>
@endsection
