<x-app-layout>
    @include('components.dash-nav-header')
    @include('components.dash-chat-box')
    @include('components.dash-header',['titletxt' => 'All Users'])
    @include('components.dash-sidebar')
    @include('template.admin-users')
</x-app-layout>
