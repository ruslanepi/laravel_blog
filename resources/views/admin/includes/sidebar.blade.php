<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Blog </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.post.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Посты
                            <span class="badge badge-info right">444</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('admin.tag.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Тэги
                            <span class="badge badge-info right">444</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Категории
                            <span class="badge badge-info right">3</span>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
