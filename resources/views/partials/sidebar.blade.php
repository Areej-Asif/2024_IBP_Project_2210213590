<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
        <a href="/admin" class="logo-link nk-sidebar-logo" style="display: flex; align-items: center; justify-content: center; height: 100px; width: 100%;">
    <div style="font-size: 36px; font-weight: bold; text-align: center; width: 100%;">Assignment</div>
</a>

        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboard</h6>
                    </li><!-- .nk-menu-item -->


                    @can('dashboard_access')
                        <li class="nk-menu-item">
                            <a href="{{ route('admin.home') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">{{ trans('global.dashboard') }}</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    @endcan
                    @can('permission_access')
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.permissions.index') }}" class="nk-menu-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <span class="nk-menu-icon"><em class="icon ni ni-shield-alert"></em></span>
                            <span class="nk-menu-text">{{ trans('cruds.permission.title') }}</span>
                        </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.roles.index') }}" class="nk-menu-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <span class="nk-menu-icon"><em class="icon ni ni-lock-alt"></em></span>
                            <span class="nk-menu-text">{{ trans('cruds.role.title') }}</span>
                        </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.users.index') }}" class="nk-menu-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">{{ trans('cruds.user.title') }}</span>
                        </a>
                    </li>
                    @endcan
                    {{-- @can('audit_log_access')
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.audit-logs.index') }}" class="nk-menu-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                            <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                            <span class="nk-menu-text">{{ trans('cruds.auditLog.title') }}</span>
                        </a>
                    </li>
                @endcan --}}



                @can('status_access')
                <li class="nk-menu-item {{ request()->is('admin/statuses') || request()->is('admin/statuses/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.statuses.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-bar-chart"></em></span>
                        <span class="nk-menu-text">{{ trans('cruds.status.title') }}</span>
                    </a>
                </li><!-- .nk-menu-item -->
            @endcan
            @can('priority_access')
                <li class="nk-menu-item {{ request()->is('admin/priorities') || request()->is('admin/priorities/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.priorities.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-shield-star"></em></span>
                        <span class="nk-menu-text">{{ trans('cruds.priority.title') }}</span>
                    </a>
                </li><!-- .nk-menu-item -->
            @endcan
            @can('category_access')
                <li class="nk-menu-item {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                        <span class="nk-menu-text">{{ trans('cruds.category.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('ticket_show')
                <li class="nk-menu-item {{ request()->is('admin/tickets') || request()->is('admin/tickets/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tickets.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-notice"></em></span>
                        <span class="nk-menu-text">{{ trans('cruds.ticket.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('comment_access')
                <li class="nk-menu-item {{ request()->is('admin/comments') || request()->is('admin/comments/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.comments.index') }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-comments"></em></span>
                        <span class="nk-menu-text">{{ trans('cruds.comment.title') }}</span>
                    </a>
                </li>
            @endcan
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link"
                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                    <span class="nk-menu-text">{{ trans('global.logout') }}</span>
                </a>

<form id="logoutform" class="d-none" action="{{route('logout')}}" method="POST">
    @csrf
    </form>

            </li>

            </div>
        </div>
    </div>
</div>
