<!DOCTYPE html>
<html>

    @include('dashboard/layouts.head')

    <body>
        <div class="dashboard-main-wrapper">

            @include('dashboard/layouts.header')
            @include('dashboard/layouts.notification_sidebar')
            @include('dashboard/layouts.left_sidebar')
            

            <div class="dashboard-wrapper">


                @yield('content')


            </div>

            @include('dashboard/layouts.footer')
            @include('dashboard/layouts.modals')
            @yield('styles')
            
            @yield('scripts')

        </div>
    </body>
</html>