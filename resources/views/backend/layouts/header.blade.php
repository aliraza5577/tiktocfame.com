<div class="app-container">
    <div class="search">
        <form>
            <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
        </form>
        <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
    </div>

<div class="app-header">
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
            {{-- LEFT SIDE --}}
            <div class="navbar-nav" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                    </li>
                </ul>
            </div>

            {{-- Right Side --}}
            <div class="d-flex">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                    </li> --}}
                    <li class="nav-item dropdown hidden-on-mobile">
                        <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="material-icons">person</i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="{{ url('admin/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
