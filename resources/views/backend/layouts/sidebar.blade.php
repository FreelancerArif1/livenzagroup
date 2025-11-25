<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="" class="logo">
                <img style="width: 60px;height: 60px;border-radius: 50%;background: #fff;"
                    src="{{ Helper::getSettings('site_logo') ? asset(Helper::getSettings('site_logo')) : 'assets/img/Logo.png' }}"
                    alt="navbar brand " class="navbar-brand logo-boundary">
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                @if (Helper::hasRight('dashboard.view'))
                    <li class="nav-item {{ Route::is('admin.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.index') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <p class="ms-4"><span class="sub-item">{{ trans('Dashboard') }}</span></p>
                        </a>
                    </li>
                @endif
                @if (Helper::hasRight('setting.view'))
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#users"
                            aria-expanded="@if (Route::is('admin.setting.general') ||
                                    Route::is('admin.setting.static.content') ||
                                    Route::is('admin.setting.legal.content') ||
                                    Route::is('admin.contact') ||
                                    Route::is('admin.resource')) true @else false @endif">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <p class="ms-4">{{ trans('Settings') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse @if (Route::is('admin.setting.general') ||
                                Route::is('admin.setting.static.content') ||
                                Route::is('admin.setting.legal.content') ||
                                Route::is('admin.contact') ||
                                Route::is('admin.resource')) show @endif" id="users">
                            <ul class="nav nav-collapse">
                                @if (Helper::hasRight('setting.general'))
                                    <li class="{{ Route::is('admin.setting.general') ? 'active' : '' }}">
                                        <a href="{{ route('admin.setting.general') }}">
                                            <span class="sub-item">{{ trans('General Setting') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Helper::hasRight('setting.static-content'))
                                    <li class="{{ Route::is('admin.setting.static.content') ? 'active' : '' }}">
                                        <a href="{{ route('admin.setting.static.content') }}">
                                            <span class="sub-item">{{ trans('Static Content') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Helper::hasRight('setting.legal-content'))
                                    <li class="{{ Route::is('admin.setting.legal.content') ? 'active' : '' }}">
                                        <a href="{{ route('admin.setting.legal.content') }}">
                                            <span class="sub-item">{{ trans('Legal Content') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Helper::hasRight('contact.view'))
                                    <li class="{{ Route::is('admin.contact') ? 'active' : '' }}">
                                        <a href="{{ route('admin.contact') }}">
                                            <span class="sub-item">{{ trans('Contact Management') }}</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                @if (Helper::hasRight('setting.view'))
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#roleview"
                            aria-expanded="@if (Route::is('admin.role') ||
                                    Route::is('admin.role.create') ||
                                    Route::is('admin.role.edit') ||
                                    Route::is('admin.role.right') ||
                                    Route::is('admin.user')) true @else false @endif">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <p class="ms-4">{{ trans('Administration') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse @if (Route::is('admin.role') ||
                                Route::is('admin.role.create') ||
                                Route::is('admin.role.edit') ||
                                Route::is('admin.role.right') ||
                                Route::is('admin.user')) show @endif" id="roleview">
                            <ul class="nav nav-collapse">
                                @if (Helper::hasRight('role.view'))
                                    <li class="{{ Route::is('admin.role') ? 'active' : '' }}">
                                        <a href="{{ route('admin.role') }}">
                                            <span class="sub-item">{{ trans('Role Management') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Helper::hasRight('right.view'))
                                    <li class="{{ Route::is('admin.role.right') ? 'active' : '' }}">
                                        <a href="{{ route('admin.role.right') }}">
                                            <span class="sub-item">{{ trans('Right Management') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Helper::hasRight('user.view'))
                                    <li class="{{ Route::is('admin.user') ? 'active' : '' }}">
                                        <a href="{{ route('admin.user') }}">
                                            <span class="sub-item">{{ trans('User Management') }}</span>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </li>
                @endif

                @if (Helper::hasRight('slider.view'))
                    <li class="nav-item {{ Route::is('slider.index') ? 'active' : '' }}">
                        <a href="{{ route('slider.index') }}">
                            <i class="fa fa-sliders" aria-hidden="true"></i>
                            <p class="ms-4"> {{ trans('Slider') }}</p>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>
