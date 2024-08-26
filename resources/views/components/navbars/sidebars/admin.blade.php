@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer opacity-5 position-absolute end-0 top-0 d-none d-xl-none text-dark"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" # ">
            <img src="{{ asset('assets') }}/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-dark">Pizzería</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'productos.index' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('productos.index') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">menu_book</i>
                    </div>
                    <span class="nav-link-text ms-1">Productos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'productos.create' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('productos.create') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">add_circle</i>
                    </div>
                    <span class="nav-link-text ms-1">Añadir Producto</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
