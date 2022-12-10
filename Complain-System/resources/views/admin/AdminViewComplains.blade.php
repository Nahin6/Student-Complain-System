<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('sweetalert::alert')

        @include('admin.AdminLinks')
        <!-- partial:partials/_sidebar.html -->
        @include('admin.AdminSideNav')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Complains</h4>
                                <div class="table-responsive">
                                    <form action="" method="GET">
                                        <div
                                            style="display: flex; margin-left:10px; justify-content: space-evenly;margin-bottom: 48px;"">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Filter by date</label><br>
                                                <input type="date" name="date" value="" class="form-control"
                                                    placeholder="date" />
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="exampleInputName1">Filter by date</label><br>
                                                <input type="date" name="dateTwo" value="" class="form-control"
                                                    placeholder="date" />
                                            </div> --}}

                                            <div class="form-group">
                                                <label for="exampleInputName1" class="mt-1">Complain Type</label>
                                                <select name="ComplainTypeFilter" class="form-control"
                                                    id="exampleInputEmail3"
                                                    style="width: 100%; text-align: center; color:white;font-size: 15px;                                                ">

                                                    <option value="Normal">Normal</option>
                                                    <option value="Argent">Argent</option>
                                                </select>
                                            </div>
                                            <div style="text-align: center;   margin-top: 28px;">
                                                <button type="submit" class="btn btn-success me-2 ">
                                                    Submit
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th>Student Name</th>
                                                <th>Student ID</th>
                                                <th>Complain Type</th>
                                                <th>Complain Section</th>
                                                <th>Detail Messages</th>
                                                <th>Complain Date</th>
                                                <th>Status</th>
                                                <th>Delete Complain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Complain as $Complains)
                                                <tr>
                                                    <td>{{ $Complains->StudentName }}</td>
                                                    <td>{{ $Complains->StudentId }}</td>
                                                    <td>{{ $Complains->ComplainType }}</td>
                                                    <td>{{ $Complains->ComplainSection }}</td>
                                                    <td>{{ $Complains->Description}}</td>
                                                    <td>{{ $Complains->created_at}}</td>
                                                    <td>{{ $Complains->ComplainStatus }}</td>
                                                    <td> <a type="button"
                                                            style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                                                            onClick="return confirm('Are you sure')"
                                                            class="btn btn-danger  m-2"
                                                            href="{{ url('RemoveComplainButton', $Complains->id) }} ">Delete</a>


                                                    </td>




                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    </div>
    </div>
    </div>










    <!-- partial:partials/_headNavbar.html -->
    @include('admin.AdminHeaderNav')
    <!-- partial -->
    {{-- body --}}

    {{-- body --}}
    <!-- plugins:js -->
    </div>
</body>

</html>
