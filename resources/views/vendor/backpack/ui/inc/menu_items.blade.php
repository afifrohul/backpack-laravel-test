{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if (backpack_user()->hasRole('superadmin'))
<x-backpack::menu-dropdown title="Add-ons" icon="la la-puzzle-piece">
    <x-backpack::menu-dropdown-header title="Authentication" />
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>

@endif
<x-backpack::menu-dropdown title="Shortlink" icon="la la-link">
    <x-backpack::menu-dropdown-header title="Shortlink" />
    <x-backpack::menu-dropdown-item title="List" icon="la la-list" :link="backpack_url('shortlink')" />
    <x-backpack::menu-dropdown-item title="Create New" icon="la la-plus" :link="backpack_url('shortlink/create')" />
</x-backpack::menu-dropdown>
{{-- <x-backpack::menu-item title="Shortlinks" icon="la la-link" :link="backpack_url('shortlink')" /> --}}