<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('Student.StudentLinks')
        <!-- partial:partials/_sidebar.html -->
        @include('Student.StudentSideNav')
        <!-- partial -->

        <!-- partial:partials/_headNavbar.html -->
        @include('Student.StudentHeaderNav')
        <!-- partial -->
        {{-- body --}}
        @include('Student.StudentBody')
        {{-- body --}}
        <!-- plugins:js -->
    </div>
</body>

</html>
