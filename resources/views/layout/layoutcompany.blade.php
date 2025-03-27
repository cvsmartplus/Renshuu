<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head />

<body>

    <!-- Sidebar khusus company -->
    <x-sidebarcompany />

    <main class="dashboard-main">

        <!-- Navbar -->
        <x-navbarcompany />

        <div class="dashboard-main-body">
            <!-- Content -->
            @yield('content')
        </div>

        <!-- Footer -->
        <x-footer />
        
    </main>

    <!-- Scripts -->
    <x-script script='{!! isset($script) ? $script : "" !!}' />

</body>
</html>
