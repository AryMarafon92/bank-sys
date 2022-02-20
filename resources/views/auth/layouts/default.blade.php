<!DOCTYPE html>
<html>

    @include('dashboard/layouts.head')

    <body class="animsition">
        <div class="page-wrapper">

            @yield('content')

            @yield('styles')
            
            @yield('scripts')

            @include('dashboard/layouts.modals')

        </div>
    </body>
</html>