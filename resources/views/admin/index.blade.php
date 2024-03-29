@extends('layouts.apps')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-success">
                            <p>Asistencia de Personal</p>
                            <h4 class="text-success">603</h4>
                        </div>
                        <div class="w-50 bg-success p-3">
                            <p class="mb-3 text-white">+ 16% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-danger">
                            <p>Inasistencia de Personal</p>
                            <h4 class="text-danger">13</h4>
                        </div>
                        <div class="w-50 bg-danger p-3">
                            <p class="mb-3 text-white">- 3.4% <i class="bi bi-arrow-down"></i></p>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-warning">
                            <p>Personal Sin Marcación</p>
                            <h4 class="text-warning">30</h4>
                        </div>
                        <div class="w-50 bg-warning p-3">
                            <p class="mb-3 text-white">+ 24% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-info">
                            <p>Personal Con Tardanza</p>
                            <h4 class="text-info">23</h4>
                        </div>
                        <div class="w-50 bg-info p-3">
                            <p class="mb-3 text-white">+ 8.2% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card w-100 radius-10">
                <div class="card-body">
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <h6 class="mb-0">Ingreso De Personal</h6>
                                    
                                </div>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-0">
                                <div class="widget-icon mx-auto mb-2 bg-light-success text-success">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h4 class="mb-0 text-center">1,360</h4>
                            </div>
                            <div id="chart15"></div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <h6 class="mb-0">Total Clicks</h6>
                                </div>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="chart14"></div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <h6 class="mb-0">Sessions</h6>
                                </div>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="chart16"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-8 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Personal Gurkas</h6>
                                </div>
                                <div class="d-sm-flex align-items-center gap-3 mt-3">
                                    <div class="mb-2 mb-sm-0">
                                        <h4 id="contadorPersonal" class="mb-0"></h4>
                                        <p class="mb-0">Activo / Baja</p>
                                    </div>
                                    <div class="d-none d-sm-block border-end sepration-2"></div>
                                    <div class="align-self-end mb-2 mb-sm-0">
                                        <p class="mb-0" id="contadorPersonalActivo"></p>
                                    </div>
                                    <div class="align-self-end mb-2 mb-sm-0">
                                        <p class="mb-0">/</p>
                                    </div>
                                    <div class="align-self-end mb-2 mb-sm-0">
                                        <p class="mb-0" id="contadorPersonalBaja"></p>
                                    </div>
                                    <div class="align-self-end ms-auto">
                                        <div class="d-flex align-items-center gap-3">
                                            <p class="mb-0 font-13">
                                                <i class="bi bi-square-fill ms-1 text-primary"></i> Personal Activo
                                            </p>
                                            <p class="mb-0 font-13">
                                                <i class="bi bi-square-fill ms-1 text-primary-3"></i> Personal Baja
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div id="chart11"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div id="chart12"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div id="chart13"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12 col-lg-6 col-xl-6 col-xxl-4 d-flex">
            <div class="card radius-10 bg-transparent shadow-none w-100">
                <div class="card-body p-0">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">By Device</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 mt-3 g-3">
                                <div class="col">
                                    <div class="by-device-container">
                                        <canvas id="chart5"></canvas>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="">
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item d-flex align-items-center justify-content-between border-0">
                                                <i class="bi bi-tablet-landscape-fill me-2 text-orange"></i>
                                                <span>Tablet - </span> <span>22.5%</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex align-items-center justify-content-between border-0">
                                                <i class="bi bi-phone-fill me-2 text-success"></i> <span>Mobile -
                                                </span> <span>62.3%</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex align-items-center justify-content-between border-0">
                                                <i class="bi bi-display-fill me-2 text-primary"></i> <span>Desktop -
                                                </span> <span>15.2%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 w-100 mb-0 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">Sales</h6>
                                <div class="fs-5 ms-auto">
                                    <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                                        <div class="font-13"><i class="bi bi-circle-fill text-purple"></i><span
                                                class="ms-2">iPad</span></div>
                                        <div class="font-13"><i class="bi bi-circle-fill text-purple opacity-75"></i><span
                                                class="ms-2">Mob</span></div>
                                        <div class="font-13"><i class="bi bi-circle-fill text-purple opacity-50"></i><span
                                                class="ms-2">Lap</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chart6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-6 col-xxl-4 d-flex">
            <div class="card radius-10 w-100 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Orders</h6>
                        <div class="fs-5 ms-auto dropdown">
                            <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="chart7"></div>
                    <div class="d-flex align-items-center gap-5 justify-content-center mt-4 p-3 bg-light radius-10 border">
                        <div class="text-center">
                            <h2 class="mb-3 text-success">9.32m</h2>
                            <p>Total <br> Orders</p>
                        </div>
                        <div class="border-end sepration"></div>
                        <div class="text-center">
                            <h2 class="mb-3">2.56</h2>
                            <p>AVG per <br> Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-12 col-xxl-4 d-flex">
            <div class="w-100">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Asistencia Personal Gurkas</h6>
                            <div class="fs-5 ms-auto">
                                <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                                    <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span
                                            class="ms-2">Asistencia</span></div>
                                    <div class="font-13"><i class="bi bi-circle-fill text-danger"></i><span
                                            class="ms-2">Falta</span></div>
                                </div>
                            </div>
                        </div>
                        <div id="chart8"></div>
                    </div>
                </div>
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Bounce Rate</p>
                                <h4 class="mb-0 text-orange">24.8%</h4>
                            </div>
                            <div class="dropdown ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                    data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="chart9"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
@section('script')
<script src="/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="/assets/js/index2.js"></script>
<script>
    new PerfectScrollbar(".best-product")
</script>
<script src="/js/home.js"></script>
@endsection
