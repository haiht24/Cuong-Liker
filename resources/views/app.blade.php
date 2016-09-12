<!DOCTYPE html>
<html lang="en">
    <head>
        @include('elements.header')
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="main_container">
                    <!-- left side bar -->
                    @include('elements.left-side-bar')
                    <!-- /left side bar -->

                    <!-- top navigation -->
                    @include('elements.top-navigation')
                    <!-- /top navigation -->

                    <!-- page content -->
                    @yield('body')
                    <!-- /page content -->

                    <!-- footer content -->
                    <footer>
                        <div class="pull-right">
                            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
            </div>
        @include('elements.footer')
    </body>
</html>



