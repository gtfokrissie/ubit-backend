<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Ubit Farm</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">Ub</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a class="nav-link" href="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            <li class="menu-header">Pengguna</li>
            <li class=""><a class="nav-link" href="#"><i class="fas fa-users"></i> <span>Data User</span></a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Forms Employees</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="#">Performance Review</a></li>
                </ul>
            </li>

            <li class="menu-header">Master</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Home Page</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="#">Header</a></li>
                    <li class=""><a class="nav-link" href="#">Bitponic</a></li>
                    <li class=""><a class="nav-link" href="#">Donation</a></li>
                    <li class=""><a class="nav-link" href="#">Community</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Article</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('article.index') }}">Data Article</a></li>
                    <li class=""><a class="nav-link" href="{{ route('article-category.index') }}">Article Category</a></li>
                    <li class=""><a class="nav-link" href="{{ route('article-type.index') }}">Article Type</a></li>
                </ul>
            </li>
            <li class="menu-header">Report</li>
            <li class=""><a class="nav-link" href="#"><i class="fas fa-users"></i> <span>Transaction</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="http://gemssindonesia.co.id" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Web Ubit
            </a>
        </div>
    </aside>
</div>
