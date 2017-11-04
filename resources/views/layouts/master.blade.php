<!DOCTYPE html>
<html lang="en">
    <head>                        
        @yield('title')            
        
        @include('includes.head')
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app">           
            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                @include('includes.sidebar')
                <!-- END SIDEBAR -->
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    @include('includes.navbar')
                    <!-- END APP HEADER  -->
                    
                    @yield('content')
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <!-- END APP CONTAINER -->                                    

            <!-- START APP SIDEPANEL -->
            @include('includes.notification')
            <!-- END APP SIDEPANEL -->
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!-- IMPORTANT SCRIPTS -->
        @include('includes.scripts')
        <!-- END IMPORTANT SCRIPTS -->

        <!-- THIS PAGE SCRIPTS -->
        @yield('pagescripts')
        <!-- END THIS PAGE SCRIPTS -->

        <!-- APP SCRIPTS -->
        @include('includes.appscripts')
        <!-- END APP SCRIPTS -->
    </body>
</html>