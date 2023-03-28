{{-- <!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('sweetalert::alert')

        @include('admin.AdminLinks')

        @include('admin.AdminSideNav')


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

    @include('admin.AdminHeaderNav')

    </div>
</body>

</html> --}}





<!doctype html>
<html lang="en">

<head>
    <title>Complain list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="template/assets/css/parents/Table.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">
    <link rel="stylesheet" href="template/assets/css/form/util.css">
    <link rel="stylesheet" href="template/assets/css/form/main.css">
</head>
<style>
    body {

        background: #4ca1af;
        background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5);
        background: linear-gradient(to right, #4ca1af, #c4e0e5);

    }

 c
</style>

<body>

    <div class="wrapper d-flex align-items-stretch">

        @include('admin.AdminSideNav')
        @include('sweetalert::alert')

        <section class="ftco-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <form action="" method="GET">
                                <div
                                    style="display: flex; margin-left:10px; justify-content: space-evenly;margin-bottom: 48px;"">
                                    <div class="form-group">
                                        <label id="exampleInput" for="exampleInputName1">Filter by date</label><br>
                                        <input type="date" name="date" value="" class="input1"
                                            id="ComplainDropDown" placeholder="date" />
                                    </div>


                                    <div class="form-group">
                                        <label id="exampleInput" for="exampleInputName1" class="mt-1">Complain
                                            Type</label>
                                        <select name="ComplainTypeFilter" class="input1" id="ComplainDropDown"
                                            style="width: 100%; text-align: center; color:white;font-size: 15px;                                                ">

                                            <option value="Normal">Normal</option>
                                            <option value="Argent">Argent</option>
                                        </select>
                                    </div>
                                    <div style="text-align: center;   margin-top: 45px;">
                                        <button type="submit" class="btn btn-success me-2 ">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </form>
                            @if (session()->has('success'))
                            <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);"
                                class="alert alert-success ">
                                <button type="button" class="close" data-dismiss="alert">X</button>
                                {{ session()->get('success') }}

                            </div>
                        @endif
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Student ID</th>
                                        <th>Complain Type</th>
                                        <th>Complain Section</th>
                                        <th>Detail Messages</th>
                                        <th>Complain Date</th>
                                        <th>Assign to Moderator</th>
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
                                            <td>{{ $Complains->Description }}</td>
                                            <td>{{ $Complains->created_at }}</td>

                                            @if ($Complains->ComplainStatus == 'Pending')
                                                <td> <a type="button"
                                                        href="{{ url('AssignToModSTD', $Complains->id) }}"
                                                        style="color:rgb(0, 6, 0); background-color:rgb(65, 133, 223)"
                                                        onClick="return confirm('Are you sure')"
                                                        class="btn btn-danger  m-2">Assign</a>
                                                </td>
                                            @else
                                                <td> <button type="button"
                                                        style="color:rgb(0, 6, 0); background-color:rgb(16, 242, 35)"
                                                        onClick="return confirm('Are you sure')"
                                                        class="btn btn-danger  m-2" disabled>Assigned</button>
                                                </td>
                                            @endif
                                            <td> <a type="button"
                                                    style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                                                    onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
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
        </section>
    </div>

    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>
</body>

</html>
