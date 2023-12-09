<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><span class="logo-name">Admin panel</span>
            </a>
        </div>
        <ul class="sidebar-menu mysidebar-menu li">
            <li class="dropdown active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('products.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Product</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('categories.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Category</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('orders.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Orders</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('accordions.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Accordion</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('carousel.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Carousel</span></a>
            </li>
        </ul>
    </aside>
</div>
