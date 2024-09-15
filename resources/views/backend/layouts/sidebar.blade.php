<div class="app-sidebar">
    <div class="logo">
        <a href="{{ url('/') }}" class="logo-icon"><span class="logo-text">Citi Packaging</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                {{-- <img src="{{ url('public/front/assets/img/logo.svg') }}">
                <span class="activity-indicator"></span> --}}
                {{-- <span class="user-info-text">{{ Auth::user()->name }}</span> --}}
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Menu
            </li>
            <li class="@if(Request::segment(2) =='dashboard') active-page @endif">
                <a href="{{ url('admin/dashboard') }}" class="@if(Request::segment(2) =='dashboard') active @endif">
                    <i class="material-icons-two-tone">dashboard</i>Dashboard
                </a>
            </li>
            <li class="@if(Request::segment(2) =='categories') active-page @endif">
                <a href="{{ url('admin/categories') }}">
                    <i class="material-icons-two-tone">archive</i>Categories
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/categories') }}">All</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/categories/add') }}">Add</a>
                    </li>
                </ul>
            </li>
            <li class="@if(Request::segment(2) =='sub_categories') active-page @endif">
                <a href="{{ url('admin/categories') }}">
                    <i class="material-icons-two-tone">card_giftcard</i>Sub Categories
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/sub_categories') }}">All</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/sub_categories/add') }}">Add</a>
                    </li>
                </ul>
            </li>
            <li class="@if(Request::segment(2) =='product') active-page @endif">
                <a href="{{ url('admin/product') }}">
                    <i class="material-icons-two-tone">store</i>Products
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/product') }}">All</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/product/add') }}">Add</a>
                    </li>
                </ul>
            </li>
            <li class="@if(Request::segment(2) =='blog') active-page @endif">
                <a href="{{ url('admin/blog') }}">
                    <i class="material-icons-two-tone">article</i>Blogs
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/blog') }}">All</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/blog/add') }}">Add</a>
                    </li>
                </ul>
            </li>
            <li class="@if(Request::segment(2) =='quote') active-page @endif">
                <a href="{{ url('admin/quote/instant') }}">
                    <i class="material-icons-two-tone">store</i>Quotes
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/quote/instant') }}">Instant Quote</a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('admin/quote/custom') }}">Custom Quote</a>
                    </li> --}}
                </ul>
            </li>
            <li class="@if(Request::segment(2) =='users') active-page @endif">
                <a href="{{ url('admin/users') }}">
                    <i class="material-icons-two-tone">person</i>Users
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('admin/users') }}">All</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/users/add') }}">Add</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
