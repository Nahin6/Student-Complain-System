<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
       @include('sweetalert::alert')

        @include('Student.StudentLinks')
        <!-- partial:partials/_sidebar.html -->
        @include('Student.StudentSideNav')
        <!-- partial -->
        {{-- <div class="main-panel">
            <div class="content-wrapper" style="width:194%; background-color:rgba(74, 76, 79, 0.459)"> --}}


        <form action="{{ url('MakeNewComPlainButton') }}" class="col-12 grid-margin stretch-card" method="POST"
             enctype="multipart/form-data">
            @csrf
         
            <div class="col-12 grid-margin stretch-card">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">
                            Make a complain
                        </h4>

                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1" class="mt-1">Complain Type</label>
                                <select name="ComplainType" class="form-control" id="exampleInputEmail3"
                                    style="width: 100%; text-align: center; color:white;font-size: 18px;
                                    font-weight: bold;">

                                    <option value="Normal">Normal</option>
                                    <option value="Argent">Argent</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Complain Section</label>
                                <select name="ComplainSection" class="form-control" id="exampleInputEmail3"
                                    style="width: 100%; text-align: center; color:white;font-size: 18px;
                                    font-weight: bold;">

                                    <option value="IT">IT</option>
                                    <option value="LAb">Lab</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="General">General</option>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>



                                <textarea class="form-control" name="Description" id="exampleTextarea1" rows="4" style="height: 200px;"></textarea>
                            </div>

                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary me-2">
                                    Submit Complain
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
