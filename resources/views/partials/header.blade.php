

<header>
<div class="links">
            <a class="nav-link text-white" href="/">
                <i class="fa-solid fa-home-alt fa-lg fa-fw"></i>Home
            </a>



            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>Dashboard
            </a>

            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.project.index' ? 'bg-secondary' : '' }}"
                href="{{ route('admin.project.index') }}">
                <i class="fa-solid fa-diagram-project me-2"></i>Projects
            </a>



            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.project.create' ? 'bg-secondary' : '' }}"
                href="{{route('admin.project.create')}}">
                <i class="fa-solid fa-plus fa-lg fa-fw me-2"></i>Create
            </a>

            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.type.index' ? 'bg-secondary' : '' }}"
                href="{{route('admin.type.index')}}">
                <i class="fa-solid fa-t m-2"></i>Type
            </a>
        </div>
</header>
