<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('sweetalert::alert')

        @include('admin.adminLinks')
        <!-- partial:partials/_sidebar.html -->
        @include('admin.AdminSideNav')
        <!-- partial -->
        {{-- <div class="main-panel">
            <div class="content-wrapper" style="width:194%; background-color:rgba(74, 76, 79, 0.459)"> --}}


        <form action="{{ url('AddModeratorButton') }}" class="col-12 grid-margin stretch-card" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            Add Moderators
                        </h4>
                        <p class="card-description">
                           Add Moderators
                        </p>
                        <form class="forms-sample" >
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail3"
                                    placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="exampleInputName1" placeholder="Phone Number" />
                            </div>

                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary me-2">
                                   ADD
                                </button>


                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </form>
        {{-- </div>


        </div> --}}
        <!-- partial:partials/_navbar.html -->
        @include('Student.StudentHeaderNav')
        <!-- partial -->
        {{-- body --}}

        {{-- body --}}


</body>

</html>
