<aside id="sidebar-wrapper">
    <div class="sidebar-brand">

        <i class=" fas fa-laptop-code fa-3 text-primary" aria-hidden="true"  style ="font-size: 30px;"></i>
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <i class=" fas fa-code fa-3 text-primary" aria-hidden="true"  style ="font-size: 30px;"></i>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
