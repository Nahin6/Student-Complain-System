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

        @include('Teacher.TeacherSideNav')
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
                                        <th>Complain Type</th>
                                        <th>Complain Section</th>
                                        <th>Detail Messages</th>
                                        <th>Status</th>
                                        <th>Remove Complain</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($TeachersComplain as $TeachersComplains)
                                        <tr>
                                            <th scope="row" class="scope">{{ $TeachersComplains->TeacherName }}</th>
                                            <td>{{ $TeachersComplains->ComplainType }}</td>
                                            <td>{{ $TeachersComplains->ComplainSection }}</td>
                                            <td>{{ $TeachersComplains->message }}</td>
                                            <td>{{ $TeachersComplains->ComplainStatus }}</td>
                                            <td><a href="{{ url('RemoveTeacherComplain', $TeachersComplains->id) }}" class="btn btn-primary">Remove</a></td>
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
