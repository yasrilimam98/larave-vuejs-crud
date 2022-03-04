<!DOCTYPE html>

<html lang="en">
    <head>
        @include('Template.head')
        <title>Laravel & Vue JS</title>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper" id="app">
            {{-- Navbar --}}
            @include('Template.navbar')
            {{-- Sidebar --}}
            @include('Template.sidebar')

            {{-- Content --}}
            {{-- Menambahkan vue js --}}
            <div class="content-wrapper">
                <div class="content">
                        {{-- <example-component></example-component> --}}
                        <router-view></router-view>
                </div>
            </div>
            {{-- Footer --}}
            @include('Template.footer')    
        </div>
            {{-- ngambil dari public folder js dan file app.js --}}
            @include('Template.script')
    </body>
</html>
