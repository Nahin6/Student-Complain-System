{{--
<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('admin.AdminLinks')

        @include('admin.AdminSideNav')

        @include('sweetalert::alert')

        @include('admin.AdminHeaderNav')

        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title " style="text-align:center;">Moderators List</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th>Moderators Name</th>
                                                <th>Moderators Email</th>
                                                <th>Moderators Number</th>
                                                <th>Remove Moderator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Moderators as $Moderators)
                                                <tr>
                                                    <td>{{ $Moderators->name }}</td>
                                                    <td>{{ $Moderators->email }}</td>
                                                    <td>{{ $Moderators->phone }}</td>

                                                    <td> <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                                                            onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
                                                            href="{{ url('RemoveMod', $Moderators->id) }} ">Remove</a>
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

    </div>
</body>

</html>

 --}}


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
</head>
<style>
    body {

        background: #4ca1af;
        background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5);
        background: linear-gradient(to right, #4ca1af, #c4e0e5);
    }
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
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Moderator Name</th>
                                        <th>Moderator Email</th>
                                        <th>Moderator Phone Number</th>
                                        <th>Moderator Type</th>
                                        <th>Remove Moderator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Moderators as $Moderators)
                                        <tr>
                                            <th scope="row" class="scope">{{ $Moderators->name }}</th>
                                            <td>{{ $Moderators->email }}</td>
                                            <td>{{ $Moderators->phone }}</td>
                                            <td>{{ $Moderators->ModeratorType }}</td>
                                            <td><a   onClick="return confirm('Are you sure')" href="{{ url('RemoveMod', $Moderators->id) }}" class="btn btn-primary">Remove</a></td>
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
