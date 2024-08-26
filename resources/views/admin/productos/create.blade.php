<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebars.admin activePage='productos.create'></x-navbars.sidebars.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Añadir Producto"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="p-4 col-lg-6 offset-lg-3">
                    <h5 class="mb-2 ">Añadir nuevo producto</h5>
                    <form method="post" action="{{ route('productos.store') }}" files="true" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Descripción</label>
                                    <input type="text" id="description" name="description" class="form-control" rows="2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Precio</label>
                                    <input type="number" id="price" name="price" class="form-control" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="btn btn-primary btn my-3" title="Seleccionar">
                                    <input type="file" class="form-control" style="display: none;" id="image" name="image" accept="image/*" required>
                                    Seleccionar Imagen
                                </label>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary my-3">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </main>
</x-layout>