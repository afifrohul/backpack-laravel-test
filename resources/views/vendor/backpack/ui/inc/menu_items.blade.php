{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if (backpack_user()->hasRole('superadmin'))
<x-backpack::menu-item title="Users" icon="la la-user" :link="backpack_url('user')" />
@endif
<x-backpack::menu-item title="Shortlinks" icon="la la-link" :link="backpack_url('shortlink')" />