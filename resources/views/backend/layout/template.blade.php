<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('backend.includes.header')
    @include('backend.includes.info')
    @include('backend.includes.css')

    
  </head>

  <body>
    
    @include('backend.includes.menubar')
    @include('backend.includes.topbar')
    @include('backend.includes.options')


    <!-- ########## Body Content Start ########## -->
    <div class="br-mainpanel">
      @yield('body')


      @include('backend.includes.footer')
      
    </div><!-- br-mainpanel -->
    <!-- ########## Body Content End ########## -->

    @include('backend.includes.scripts')
    
  </body>
</html>
