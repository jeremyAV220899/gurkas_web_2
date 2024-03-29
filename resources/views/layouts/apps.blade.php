<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/icons/gurkas_icon.ico" type="image/png" />
    <!--plugins-->
    <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />  
    <link href="/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <!--link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /-->
    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <!-- loader-->
    <link href="/assets/css/pace.min.css" rel="stylesheet" />
    <!--Theme Styles-->
    <link href="/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="/assets/css/light-theme.css" rel="stylesheet" />
    <link href="/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="/assets/css/header-colors.css" rel="stylesheet" />
    @yield('links')

    <title>GURKAS SAC</title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="bi bi-list"></i>
                </div>
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item search-toggle-icon">
                            <a class="nav-link" href="#">
                                <div class="">
                                    <i class="bi bi-search"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center">
                                    <img src="{{ Storage::url(Auth::user()->imagen)}}" class="user-img" alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ Storage::url(Auth::user()->imagen)}}" alt=""
                                                class="rounded-circle" width="54" height="54">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">HR
                                                    Manager</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('usuario.perfil') }}">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-person-fill"></i></div>
                                            <div class="ms-3"><span>Perfil</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-salir').submit();">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-lock-fill"></i></div>
                                            <div class="ms-3"><span>Salir</span></div>
                                        </div>
                                    </a>
                                    <form action="{{ route('logout') }}" id="form-salir" method="POST" style="display:none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="projects">
                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 gx-2">
                                    <div class="col">
                                        <a href="ecommerce-orders.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                                                    <i class="bi bi-basket2-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Orders</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                                                    <i class="bi bi-people-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Users</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="ecommerce-products-grid.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                                                    <i class="bi bi-trophy-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Products</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="component-media-object.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                                                    <i class="bi bi-collection-play-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Media</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="pages-user-profile.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                                                    <i class="bi bi-person-circle"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Account</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                                                    <i class="bi bi-file-earmark-text-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Docs</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="ecommerce-orders-detail.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                                                    <i class="bi bi-credit-card-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Payment</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                                                    <i class="bi bi-calendar-check-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Events</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                                                    <i class="bi bi-book-half"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Story</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="messages">
                                    <span class="notify-badge">5</span>
                                    <i class="bi bi-chat-right-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2 border-bottom m-2">
                                    <h5 class="h5 mb-0">Messages</h5>
                                </div>
                                <div class="header-message-list p-2">
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                    standard chunk of lorem...</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many
                                                    desktop publishing</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making
                                                    this the first true</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span
                                                        class="msg-time float-end text-secondary">3 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It
                                                    was popularised in the 1960</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span
                                                        class="msg-time float-end text-secondary">1 d</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If
                                                    you are going to use a passage</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span
                                                        class="msg-time float-end text-secondary">2 w</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All
                                                    the Lorem Ipsum generators</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                    standard chunk of lorem...</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many
                                                    desktop publishing</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/110X110" alt=""
                                                class="rounded-circle" width="50" height="50">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making
                                                    this the first true</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="text-center">View All Messages</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="notifications">
                                    <span class="notify-badge">8</span>
                                    <i class="bi bi-bell-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2 border-bottom m-2">
                                    <h5 class="h5 mb-0">Notifications</h5>
                                </div>
                                <div class="header-notifications-list p-2">
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-primary text-primary"><i
                                                    class="bi bi-basket2-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Orders <span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You
                                                    have recived new orders</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-purple text-purple"><i
                                                    class="bi bi-people-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Customers <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5
                                                    new user registered</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-success text-success"><i
                                                    class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">24 PDF File <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                    pdf files generated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-orange text-orange"><i
                                                    class="bi bi-collection-play-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Time Response <span
                                                        class="msg-time float-end text-secondary">3 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1
                                                    min avarage time response</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-info text-info"><i
                                                    class="bi bi-cursor-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Product Approved <span
                                                        class="msg-time float-end text-secondary">1 d</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your
                                                    new product has approved</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-pink text-pink"><i
                                                    class="bi bi-gift-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Comments <span
                                                        class="msg-time float-end text-secondary">2 w</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                                    customer comments recived</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-warning text-warning"><i
                                                    class="bi bi-droplet-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New 24 authors<span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24
                                                    new authors joined last week</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-primary text-primary"><i
                                                    class="bi bi-mic-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully
                                                    shipped your item</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-success text-success"><i
                                                    class="bi bi-lightbulb-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45%
                                                    less alerts last 4 weeks</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-info text-info"><i
                                                    class="bi bi-bookmark-heart-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span
                                                        class="msg-time float-end text-secondary">2 w</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                                    4 user registartions</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box bg-light-bronze text-bronze"><i
                                                    class="bi bi-briefcase-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span
                                                        class="msg-time float-end text-secondary">1 mo</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully
                                                    uploaded all files</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="text-center">View All Notifications</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="/assets/images/icons/gurkas_icon.ico" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">GURKAS</h4>
                </div>
                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                </div>
            </div>

            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-people-fill"></i>
                        </div>
                        <div class="menu-title">Recursos Humanos</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Personal</a>
                            <ul>
                                <li> <a href="{{ route('personal.index') }}"><i class="bi bi-circle"></i>Registro de Datos Personales</a></li>
                                <li> <a href="{{ route('personal.indexBaja') }}"><i class="bi bi-circle"></i>Personales de Baja</a></li>
                                <li> <a href="{{ route('personal.familiares') }}"><i class="bi bi-circle"></i>Registro de Datos Familiares</a></li>
                                <li> <a href="{{ route('personal.laborales') }}"><i class="bi bi-circle"></i>Registro de Datos Laborales</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reportes</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte de Personal</a>
                                    <ul>
                                        <li> <a href="{{ route('reportes.c4') }}"><i class="bi bi-circle"></i>Personal C4</a>
                                        <li> <a href="{{ route('reportes.estado') }}"><i class="bi bi-circle"></i>Estado de Personal</a>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte de Asistencia</a>
                                    <ul>
                                        <li> <a href="{{ route('reportes.asistencia-personal') }}"><i class="bi bi-circle"></i>Asistencia de Personal</a>
                                        <li> <a href="{{ route('reportes.asistencia-unidad') }}"><i class="bi bi-circle"></i>Asistencia por Unidad</a>
                                        <li> <a href="{{ route('reportes.asistencia-sede') }}"><i class="bi bi-circle"></i>Asistencia por Sede</a>
                                        <li> <a href="{{ route('reportes.asistencia-general') }}"><i class="bi bi-circle"></i>Asistencia General de Personal</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Postulante</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Lista de Postulante</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Estado de Postulante</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Busqueda de Personal</a>
                            <ul>
                                <li> <a href="{{ route('busqueda.unidad') }}"><i class="bi bi-circle"></i>Personal por Unidad</a></li>
                                <li> <a href="{{ route('busqueda.sede') }}"><i class="bi bi-circle"></i>Personal por Sede</a></li>
                                <li> <a href="{{ route('busqueda.empresa') }}"><i class="bi bi-circle"></i>Personal por Empresa</a></li>
                                <li> <a href="{{ route('busqueda.edad') }}"><i class="bi bi-circle"></i>Personal por Edad</a></li>
                                <li> <a href="{{ route('busqueda.estatura') }}"><i class="bi bi-circle"></i>Personal por Estatura</a></li>
                                <li> <a href="{{ route('busqueda.turno') }}"><i class="bi bi-circle"></i>Personal por Turno</a></li>
                                <li> <a href="{{ route('busqueda.dni') }}"><i class="bi bi-circle"></i>Personal por DNI</a></li>
                                <li> <a href="{{ route('busqueda.ingreso') }}"><i class="bi bi-circle"></i>Personal por Fecha de Ingreso</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Carga Masiva de Datos</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Datos Laborales</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Actualización de Bancos</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-camera-video-fill"></i>
                        </div>
                        <div class="menu-title">Centro de Control</div>
                    </a>                    
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Asistencia de Personal</a>
                            <ul>
                                <li> <a href="{{ route('centrocontrol.asistencia') }}"><i class="bi bi-circle"></i>Tareo de Personal</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Rep. Centro de Control</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Cantidad de Asistencia por Sede</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Marcación por Fecha y Turno</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Rep. de Asistencia</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia General de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Personal sin Marcación</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Bloqueos de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Cantidad de Turnos Trabajados</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END CENTRO DE CONTROL -->
                <!-- OPERACIONES -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-incognito"></i>
                        </div>
                        <div class="menu-title">Operaciones</div>
                    </a>                    
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Unidad</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Activación de Unidad</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Sede</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Activación de Sede</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia General de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia de Personal Sedapal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Estado de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Personal sin Marcación</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reclamo</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Reclamo de Agente</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Analista</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Cant. de Turnos Trabajados</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END OPERACIONES -->
                <!-- COMERCIAL -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-truck"></i>
                        </div>
                        <div class="menu-title">Comercial</div>
                    </a>                    
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Unidad</a>
                            <ul>
                                <li> <a href="{{ route('comercial.unidad') }}"><i class="bi bi-circle"></i>Lista de Unidad</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Sede</a>
                            <ul>
                                <li> <a href="{{ route('comercial.sede') }}"><i class="bi bi-circle"></i>Lista de Sedes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asistencia de Personal Completo</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Detalles de Personal</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END COMERCIAL -->
                <!-- LICITACIONES -->
                <li>
                    <a href="#" target="_blank">
                        <div class="parent-icon"><i class="bi bi-stack"></i>
                        </div>
                        <div class="menu-title">Licitaciones</div>
                    </a>
                </li>
                <!-- END LICITACIONES -->
                <!-- LOGISTICA -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-archive-fill"></i>
                        </div>
                        <div class="menu-title">Logística</div>
                    </a>                    
                    <ul>
                        <li> <a href="javascript:;"><i class="bi bi-circle"></i>Ingreso Material Fuera del Sist.</a>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Estado de Personal</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Kardex</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Descuentos Agentes Retirados</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Descuentos de Zapatos</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Acta de Conformidad</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Cantidad de Material por Unidad</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Almacén</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Producto</a>
                                    <ul>
                                        <li> <a href="{{ route('logistica.almacen.producto.tecnologia') }}"><i class="bi bi-circle"></i>Tecnología</a></li>
                                        <ul>
                                            <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Uniforme</a>
                                                <ul>
                                                    <li> <a href="{{ route('logistica.almacen.producto.camisa') }}"><i class="bi bi-circle"></i>Camisas</a></li>
                                                    <li> <a href="{{ route('logistica.almacen.producto.calzado') }}"><i class="bi bi-circle"></i>Calzado</a></li>
                                                    <li> <a href="{{ route('logistica.almacen.producto.pantalon') }}"><i class="bi bi-circle"></i>Pantalon</a></li>
                                                    <li> <a href="{{ route('logistica.almacen.producto.accesorios') }}"><i class="bi bi-circle"></i>Accesorios</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <li> <a href="{{ route('logistica.almacen.producto.utiles') }}"><i class="bi bi-circle"></i>Utiles Escritorio</a></li>
                                        <li> <a href="{{ route('logistica.almacen.producto.equipamiento') }}"><i class="bi bi-circle"></i>Equipamiento Logístico</a></li>
                                        <li> <a href="{{ route('logistica.almacen.producto.proteccion') }}"><i class="bi bi-circle"></i>Equipamiento Protección Personal</a></li>
                                        <li> <a href="{{ route('logistica.almacen.producto.mobiliario') }}"><i class="bi bi-circle"></i>Mobiliario</a></li>
                                        <li> <a href="{{ route('logistica.almacen.producto.vehiculo') }}"><i class="bi bi-circle"></i>Vehiculos</a></li>
                                        <li> <a href="{{ route('logistica.almacen.producto.aseo') }}"><i class="bi bi-circle"></i>Utiles de Aseo</a></li>
                                        <li> <a href="{{ route('logistica.almacen.producto.armamento') }}"><i class="bi bi-circle"></i>Armamento</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Despacho</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Entrega de Material Logístico</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Internamiento</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Internamiento de Material Logístico</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Destrucción Logístico</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Destruir Material</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Recuperar Material</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Inventario</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Actualizar Stock</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Stock Actual</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Proveedores</a>
                            <ul>
                                <li> <a href="{{route('logistica.proveedor.listar')}}"><i class="bi bi-circle"></i>Registrar Proveedor</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Listar Proveedor</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Ordenes</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Orden de Compra</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Registrar Orden de Compra</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Orden Aprobada</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Orden de Servicio</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Registrar Orden de Servicio</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Historial</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Orden de Compra</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Orden Servicio</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Salida de Material</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Material</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END LOGISTICA -->
                <!-- PLANILLA -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-cash-coin"></i>
                        </div>
                        <div class="menu-title">Planilla</div>
                    </a>                    
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Personal</a>
                            <ul>
                                <li> <a href="{{ route('planillas.datos') }}"><i class="bi bi-circle"></i>Datos Laborales Empleados</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Actualizar datos Empleados</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>AFP</a>
                            <ul>
                                <li> <a href="{{ route('planillas.comision') }}"><i class="bi bi-circle"></i>Actualizar Comisión AFP</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Actualizar AFP masivo Empleados</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Asistencia</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Reporte de Asistencia</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Marcación por Fecha y Turno</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Reporte por Turno</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Datos Empleados</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Datos Generales de Planilla</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Historial de Empleado</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Bajas de Empleado</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Carga de Datos</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Carga de Asistencia</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Carga de CTS</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Carga de Datos Gratificación</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Carga de Bloqueos de Personal</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>PLAME</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Generar Archivo PLAME</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Plataforma de Pagos</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Calculo por días laborados</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Calculo de Vacaciones</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Calculo de Otras Licencias</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Calculo de descanso Médico</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Calculo de CTS</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Calculo de Gratificación</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Historial</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Planilla por días Laborados</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Planilla de Vacaciones</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Planilla de otras Licencias</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Planilla de descanso Médico</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Planilla de CTS</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Historial de Planilla de Gratificación</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Bloqueo de Personal</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Lista de Personal Bloqueado</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Sueldo UND - Puesto</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Actualizar Sueldo de UND o Puesto</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END PLANILLA -->
                <!-- CONTABILIDAD -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-collection-fill"></i>
                        </div>
                        <div class="menu-title">Contabilidad</div>
                    </a>                    
                    <ul>
                        <li> <a href="javascript:;"><i class="bi bi-circle"></i>Planilla por Unidad</a></li>
                    </ul>
                </li>
                <!-- END CONTABILIDAD -->
                <!-- SUCAMEC -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-bank2"></i>
                        </div>
                        <div class="menu-title">SUCAMEC</div>
                    </a>                    
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Datos</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Consulta de Datos Empleados</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte de Personal</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Personal C4</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Estado de Personal</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Reporte de Asistencia</a>
                                    <ul>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Asistencia de Personal</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Asistencia por UND o Sede</a></li>
                                        <li> <a href="#"><i class="bi bi-circle"></i>Asistencia General de Personal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END SUCAMEC -->
                <!-- TICKET DE CONSULTA -->
                <li>
                    <a href="#">
                        <div class="parent-icon"><i class="bi bi-ticket-detailed-fill"></i>
                        </div>
                        <div class="menu-title">Ticket de Consulta</div>
                    </a>
                </li>
                <!-- END TICKET DE CONSULTA -->
                <!-- ADMINISTRADOR -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-gear-fill"></i>
                        </div>
                        <div class="menu-title">Administrador</div>
                    </a>                    
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Usuario</a>
                            <ul>
                                <li> <a href="{{ route('usuario.index') }}"><i class="bi bi-circle"></i>Registrar Usuario</a></li>
                                <li> <a href="{{ route('usuario.indexBaja') }}"><i class="bi bi-circle"></i>Usuarios de baja</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Asignar Unidad</a></li>
                                <li> <a href="#"><i class="bi bi-circle"></i>Reporte de Contraseña</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Control de Asistencia</a>
                            <ul>
                                <li> <a href="#"><i class="bi bi-circle"></i>Modificar Asistencia Personal</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Sistemas</a>
                            <ul>
                                <li> <a href="{{ route('administrador.sistemas.armado') }}"><i class="bi bi-circle"></i>ARMADO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.banco') }}"><i class="bi bi-circle"></i>BANCOS</a></li>
                                <li> <a href="{{ route('administrador.sistemas.brevete') }}"><i class="bi bi-circle"></i>BREVETE</a></li>
                                <li> <a href="{{ route('administrador.sistemas.contrato') }}"><i class="bi bi-circle"></i>CONTRATO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.documento') }}"><i class="bi bi-circle"></i>DOCUMENTO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.empresa') }}"><i class="bi bi-circle"></i>EMPRESA</a></li>
                                <li> <a href="{{ route('administrador.sistemas.estado') }}"><i class="bi bi-circle"></i>ESTADO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.genero') }}"><i class="bi bi-circle"></i>GENERO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.grado') }}"><i class="bi bi-circle"></i>GRADO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.hora') }}"><i class="bi bi-circle"></i>HORAS LABORALES</a></li>
                                <li> <a href="{{ route('administrador.sistemas.nacionalidad') }}"><i class="bi bi-circle"></i>NACIONALIDAD</a></li>
                                <li> <a href="{{ route('administrador.sistemas.puesto') }}"><i class="bi bi-circle"></i>PUESTO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.situacion') }}"><i class="bi bi-circle"></i>SITUACION</a></li>
                                <li> <a href="{{ route('administrador.sistemas.talla') }}"><i class="bi bi-circle"></i>TALLAS</a></li>
                                <li> <a href="{{ route('administrador.sistemas.turno') }}"><i class="bi bi-circle"></i>TURNO</a></li>
                                <li> <a href="{{ route('administrador.sistemas.asistencia') }}"><i class="bi bi-circle"></i>TIPO DE ASISTENCIA</a></li>
                                <li> <a href="{{ route('administrador.sistemas.ubigeo') }}"><i class="bi bi-circle"></i>UBIGEO</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Regimen Pensionario</a>
                            <ul>
                                <li> <a href="{{ route('administrador.regimen.pensionarios') }}"><i class="bi bi-circle"></i>Regimen Pensionario</a></li>
                                <li> <a href="{{ route('administrador.regimen.afps') }}"><i class="bi bi-circle"></i>AFP / ONP</a></li>
                                <li> <a href="{{ route('administrador.regimen.comisiones') }}"><i class="bi bi-circle"></i>Tipo de Comisión</a></li>
                                <li> <a href="{{ route('administrador.regimen.movimientos') }}"><i class="bi bi-circle"></i>Movimiento AFP</a></li>
                                <li> <a href="{{ route('administrador.regimen.relacion') }}"><i class="bi bi-circle"></i>Relaciones Regimen Pensionario</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END ADMINISTRADOR -->
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">

            @yield('content')

        </main>
        <!--end page main-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                    class="bi bi-paint-bucket me-0"></i></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1" checked>
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                            value="option3">
                        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                    </div>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                            value="option3">
                        <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end switcher-->

    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/table-datatable.js"></script>
    <script src="/assets/js/pace.min.js"></script>
    <script src="/assets/plugins/select2/js/select2.min.js"></script>
    <script src="/assets/js/form-select2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script-->

    <!-- google maps api -->
    <script src="/assets/plugins/gmaps/map-custom-script.js"></script>
    
    
    <!--app-->
    <script src="/assets/js/app.js"></script>


    @yield('script')
</body>

</html>
