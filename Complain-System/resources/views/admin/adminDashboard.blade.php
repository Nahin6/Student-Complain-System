<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('sweetalert::alert')
        @include('admin.AdminLinks')
        <!-- partial:partials/_sidebar.html -->
        @include('admin.AdminSideNav')
        <!-- partial -->

        <!-- partial:partials/_headNavbar.html -->
        @include('admin.AdminHeaderNav')
        <!-- partial -->
        {{-- body --}}
        @include('admin.body')
        {{-- body --}}
        <!-- plugins:js -->
    </div>
</body>

</html>
