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
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>
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

<body>

    <div class="wrapper d-flex align-items-stretch">

        @include('Moderators.ModSideNav')
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
                                        <th>Complain Type</th>
                                        <th>Complain Section</th>
                                        <th>Detail Messages</th>
                                        <th>Complain Date</th>
                                        <th>Provide Solution</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($complaints as $complaints)
                                        <tr>
                                            <td>{{ $complaints->StudentName }}</td>
                                            <td>{{ $complaints->ComplainType }}</td>
                                            <td>{{ $complaints->ComplainSection }}</td>
                                            <td>{{ $complaints->Description }}</td>
                                            <td>{{ $complaints->created_at }}</td>
                                            <td>
                                                @if ($complaints->ComplainStatus == 'Solved')
                                                <button class="btn btn-success" data-toggle="modal"
                                                data-target="#solutionModal{{ $complaints->id }}" disabled>
                                                Solved
                                            </button>
                                                @else
                                                <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#solutionModal{{ $complaints->id }}">
                                                Solve issue
                                            </button>
                                                @endif

                                            </td>
                                        </tr>
                                        <div class="modal fade" id="solutionModal{{ $complaints->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="solutionModal{{ $complaints->id }}Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="solutionModal{{ $complaints->id }}Label">Provide
                                                            Solution</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('provideSolutionToStud', $complaints->id) }}">
                                                            @csrf
                                                            <div class="form-group">

                                                                <div class="wrap-input1 validate-input"
                                                                    data-validate="Message is required">
                                                                    <label for="" class="complain-lvl">Please
                                                                        Provide solution for this
                                                                        Complain</label>
                                                                    <textarea class="input1" name="solution" placeholder="solution"></textarea>
                                                                    <span class="shadow-input1"></span>
                                                                </div>
                                                                {{-- <textarea class="form-control input1" id="solution" name="solution" rows="3"></textarea> --}}
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>
</body>

</html>
