

<!DOCTYPE html>
<html lang="en">

<head>
    
    @include('frontend.includes.css')
    @include('frontend.includes.header')
    @include('frontend.includes.topbar')
    @include('frontend.includes.menubar')

    @yield('body')
    
    @include('frontend.includes.footer')
    @include('frontend.includes.modal')
    @include('frontend.includes.scripts')

    

    