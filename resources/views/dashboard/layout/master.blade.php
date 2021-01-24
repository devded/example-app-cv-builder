@include('dashboard.layout.head')
<!-- partial -->
<div class="container-fluid page-body-wrapper">

@include('dashboard.layout.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- content-wrapper ends -->

@include('dashboard.layout.footer')
