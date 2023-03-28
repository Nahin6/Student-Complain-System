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
    <link rel="stylesheet" href="template/assets/css/form/main.css">
    <style>
        body {

            background: #4ca1af;
            background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5);
            background: linear-gradient(to right, #4ca1af, #c4e0e5);

        }
        #exampleInput {
        color: rgb(26, 24, 24);
        font-weight: bold;

    }
    </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">

        @include('admin.AdminSideNav')
        @include('sweetalert::alert')

        <section class="ftco-section">
            <div class="container">
                <form action="" method="GET">
                    <div
                        style="display: flex; margin-left:10px; justify-content: space-evenly;margin-bottom: 48px;"">
                        <div class="form-group">
                            <label id="exampleInput" for="exampleInputName1">Filter by date</label><br>
                            <input type="date" name="date" value="" class="input1"
                                id="ComplainDropDown" placeholder="date" />
                        </div>
                        <div class="form-group">
                            <label id="exampleInput" for="exampleInputName1">Filter by date</label><br>
                            <input type="date" name="date_two" value="" class="input1"
                                id="ComplainDropDown" placeholder="date" />
                        </div>



                        <div style="text-align: center;   margin-top: 45px;">
                            <button type="submit" class="btn btn-success me-2 ">
                                Submit
                            </button>
                            <a href="{{ route('VisitRequest', ['clear' => 'true']) }}" class="btn btn-secondary">Clear</a>
                        </div>

                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Parents Name</th>
                                        <th>Parents number</th>
                                        <th>expected visiting Date</th>
                                        <th>expected visiting Hour</th>
                                        <th>Approve Pass </th>
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
                                            <td>
                                                @if ($StoreVisitPass->VisitingStatus=="Approved")
                                                <a type="button"
                                                style="color:rgb(0, 6, 0); background-color:rgb(6, 134, 219)"
                                                class="btn btn-danger  m-2"
                                           disabled>Approved</a>
                                                @else
                                                <a type="button"
                                                style="color:rgb(0, 6, 0); background-color:rgb(6, 219, 127)"
                                                onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
                                                href="{{ route('ApproveVisitPassButton', $StoreVisitPass->id) }} ">Approve</a></td>
                                                @endif

                                            <td>
                                                <a type="button"
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
