        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="" class="app-brand-link">
                    <div class="icon p-2 me-2">
                        <img class="" src="{{ asset('/assets/images/logos/Bloom-House-02.png') }}" alt="Icon"
                            style="width: 40px; height: 40px;">
                    </div>
                    <span class=" menu-text fw-bolder ms-2">BloomHouse</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/admin/dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-store"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                {{-- Menu Produk --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Product</span>
                </li>
                <li
                    class="menu-item {{ request()->is('product_products', 'product_categories', 'admin/review-product') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-florist"></i>
                        <div data-i18n="Layouts">Product</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('product_products') ? 'active' : '' }}">
                            <a href="{{ url('product_products') }}" class="menu-link">
                                <div data-i18n="Without menu">Product</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('product_categories') ? 'active' : '' }}">
                            <a href="{{ url('product_categories') }}" class="menu-link">
                                <div data-i18n="Without navbar">Category Product</div>
                            </a>
                        </li>
                        {{-- <li class="menu-item {{ request()->is('admin/review-product') ? 'active' : '' }}">
                            <a href="{{ url('/admin/review-product') }}" class="menu-link">
                                <div data-i18n="Container">Review Product</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                {{-- Menu Produk --}}
                {{-- Delivery Produk --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Delivery</span>
                </li>
                <li class="menu-item {{ request()->is('postages') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-truck"></i>
                        <div data-i18n="Layouts">Delivery</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('postages') ? 'active' : '' }}">
                            <a href="{{ url('postages') }}" class="menu-link">
                                <div data-i18n="Without menu">Rule</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Report</span>
                </li>
                <li class="menu-item {{ request()->is('admin/sales') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-shopping-bag"></i>
                        <div data-i18n="Layouts">Report</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('transaction') ? 'active' : '' }}">
                            <a href="{{ url('transaction') }}" class="menu-link">
                                <div data-i18n="Without menu">Transaction</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('product-review') ? 'active' : '' }}">
                            <a href="{{ url('product-review') }}" class="menu-link">
                                <div data-i18n="Without menu">Product Review </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Produk --}}

                {{-- Menu Penjualan --}}
                {{-- <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Report</span>
                </li>
                <li class="menu-item {{ request()->is('admin/sales') ? 'active' : '' }}">
                    <a href="{{ url('/admin/sales') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-shopping-bag"></i>
                        <div data-i18n=" ">Report</div>
                    </a>
                </li> --}}

                {{-- Menu Penjualan --}}

                {{-- Menu Report --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Invoice</span>
                </li>
                <li class="menu-item {{ request()->is('admin/report') ? 'active' : '' }}">
                    <a href="{{ url('/admin/report') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-report"></i>
                        <div data-i18n="">Invoice</div>
                    </a>
                </li>
                {{-- Menu Report --}}

                {{-- Menu Artikel --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Blog</span>
                </li>
                <li
                    class="menu-item {{ request()->is('admin/blog', 'admin/blog-tag', 'admin/review-product') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-florist"></i>
                        <div data-i18n="Layouts">Blog</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/blog') ? 'active' : '' }}">
                            <a href="{{ url('/admin/blog') }}" class="menu-link">
                                <div data-i18n="Without menu">blog</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/blog-tag') ? 'active' : '' }}">
                            <a href="{{ url('/admin/blog-tag') }}" class="menu-link">
                                <div data-i18n="Without navbar">Tag</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/category-product') ? 'active' : '' }}">
                            <a href="{{ url('/admin/category-product') }}" class="menu-link">
                                <div data-i18n="Without navbar">Customize</div>
                            </a>
                        </li>
                        {{-- <li class="menu-item {{ request()->is('admin/review-product') ? 'active' : '' }}">
                            <a href="{{ url('/admin/review-product') }}" class="menu-link">
                                <div data-i18n="Container">Review Product</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                {{-- Menu Artikel --}}
            </ul>

        </aside>
        <!-- / Menu -->
