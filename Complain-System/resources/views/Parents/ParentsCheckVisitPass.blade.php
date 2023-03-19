<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visiting Pass</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="template/assets/css/parents/Table.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">
    <style>
        body {

            background: #4ca1af;
            background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5);
            background: linear-gradient(to right, #4ca1af, #c4e0e5);
        }
    </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">

        @include('Parents.ParentsSideNav')
        @include('sweetalert::alert')

        <section class="ftco-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Your Name</th>
                                        <th>Your number</th>
                                        <th>Your expected visiting Date</th>
                                        <th>Your expected visiting Hour</th>
                                        <th>Visiting Pass Status</th>
                                        <th>Remove visiting Pass</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($StoreVisitPass as $StoreVisitPass)
                                    <tr>
                                        <td>{{ $StoreVisitPass->name }}</td>
                                        <td>{{ $StoreVisitPass->phone }}</td>
                                        <td>{{ $StoreVisitPass->Date }}</td>
                                        <td>{{ $StoreVisitPass->VisitHour }}</td>
                                        <td>{{ $StoreVisitPass->VisitingStatus }}</td>
                                        <td> <a type="button"
                                                style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                                                onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
                                                href="{{ url('RemoveVisitPassButton', $StoreVisitPass->id) }} ">Remove</a>
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
