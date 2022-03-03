<!DOCTYPE html>

<html lang="en">
    <head>
        @include('Template.head')
        <title>Laravel & Vue JS</title>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            {{-- Navbar --}}
            @include('Template.navbar')
            {{-- Sidebar --}}
            @include('Template.sidebar')

            {{-- Content --}}
            {{-- Menambahkan vue js --}}
            <div class="content-wrapper" id="app">
                <div class="content">
                    <div class="container-fluid">
                        <example-component></example-component>
                    </div>
                </div>
            </div>
            {{-- Footer --}}
            @include('Template.footer')    
        </div>
            {{-- ngambil dari public folder js dan file app.js --}}
            @include('Template.script')
    </body>
</html>
