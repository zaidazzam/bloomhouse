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
                <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/admin/dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-store"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                {{-- Menu Produk --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Product</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">Product</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ url('/admin/product') }}" class="menu-link">
                                <div data-i18n="Without menu">Product</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/admin/category-product') }}" class="menu-link">
                                <div data-i18n="Without navbar">Category Product</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-container.html" class="menu-link">
                                <div data-i18n="Container">Review Product</div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Produk --}}

                {{-- Menu Penjualan --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Penjualan</span>
                </li>
                <li class="menu-item {{ request()->is('datahomestay', 'tambahhomestay') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}" class="menu-link ">
                        <i class="menu-icon tf-icons bx bxs-shopping-bag"></i>
                        <div data-i18n=" ">Penjualan</div>
                    </a>
                </li>
                {{-- Menu Penjualan --}}


                {{-- Menu Report --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Report</span>
                </li>
                <li class="menu-item {{ request()->is('dataartikel', 'tambahartikel') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}" class="menu-link ">
                        <i class="menu-icon tf-icons bx bxs-report"></i>
                        <div data-i18n="">Report</div>
                    </a>
                </li>
                {{-- Menu Report --}}

                {{-- Menu Artikel --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Artikel</span>
                </li>
                <li class="menu-item {{ request()->is('dataartikel', 'tambahartikel') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link ">
                        <i class="menu-icon tf-icons bx bxl-blogger"></i>
                        <div data-i18n="">Artikel</div>
                    </a>
                </li>
                {{-- Menu Artikel --}}

            </ul>
        </aside>
        <!-- / Menu -->
