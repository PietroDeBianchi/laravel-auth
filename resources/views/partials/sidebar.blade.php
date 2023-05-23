<nav id="sidebarNav" class="h-100">
    <div class="d-flex flex-column p-3 text-bg-dark h-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Home
                </a>
            </li>
            <li>
                <a href="{{route('admin.posts.index')}}" class="nav-link">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Posts List
                </a>
            </li>
        </ul>
    </div>
</nav>