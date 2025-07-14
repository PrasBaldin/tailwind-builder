@if (Request::path() !== 'admin/dashboard')
    <div class="flex items-center p-8 mb-4">
        <nav class="flex" aria-label="breadcrumb">
            <ol class="inline-flex items-center space-x-1">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-gray-700 transition">Admin</a>
                </li>
                @yield('breadcrumb')
            </ol>
        </nav>
    </div>
@endif
