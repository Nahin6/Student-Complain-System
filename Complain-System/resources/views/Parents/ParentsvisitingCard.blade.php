<!DOCTYPE html>
<html>

<head>
    <title>Visiting Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-TgTn8V7biSv+QK1J3qX9U8KG6+Gbp6Jw/ZfUzZ10LDVk7VcbOvS2Q7Vq3TwXG4E4" crossorigin="anonymous">
    <style type="text/css">
        body {
            background-color: rgba(242, 242, 242, 0.97);
            text-align: center;
        }

        .card {
            border: 5px solid #ccc;
            border-radius: 12px;
            background: #e0e0e0;
            box-shadow: 12px 12px 7px #5a5a5a,
                -12px -12px 7px #ffffff;
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            text-align: center;

        }

        .card h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            color: rgb(73, 73, 231);
        }

        .card p {
            font-size: 20px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .card p.label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        #clr {
            font-size: 30px;
            font-weight: bold;
            margin-left: 250px;
            width: 150px;
            background: #01a714;
            color: #fefffe;
        }
    </style>
</head>

<body>
    <div class="col-12">
        <h1 class="text-center my-5">Hello Dear {{ $visit_pass->name }} Welcome to Our University!</h1>
    </div>
    <div class="card">
        <h1>Visiting Card</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="label">Name: {{ $visit_pass->name }}</p>

                <p class="label">Email: {{ $visit_pass->email }}</p>

                <p class="label">Phone: {{ $visit_pass->phone }}</p>

                <p class="label">
                    @if ($visit_pass->RelationOfStudent == 'Father')
                        Your Childs's ID: {{ $visit_pass->StudentId }}
                    @elseif ($visit_pass->RelationOfStudent == 'Mohter')
                        Your
                        Childs's ID: {{ $visit_pass->StudentId }}
                    @elseif ($visit_pass->RelationOfStudent == 'Brother')
                        Your
                        Sibling's ID: {{ $visit_pass->StudentId }}
                    @elseif ($visit_pass->RelationOfStudent == 'Sister')
                        Your
                        Sibling's ID: {{ $visit_pass->StudentId }}
                    @endif
                </p>

            </div>
            <div class="col-md-6">
                <p class="label">Your Relation with the Student:{{ $visit_pass->RelationOfStudent }}</p>

                <p class="label">Your visiting Date: {{ $visit_pass->Date }}</p>

                <p class="label">Please come within: {{ $visit_pass->VisitHour }}</p>

                <p class="label">Your visiting Purpose: {{ $visit_pass->Purpose }}</p>

                <p class="label">Visiting Status:</p>
                <p id="clr">{{ $visit_pass->VisitingStatus }}</p>
            </div>
        </div>
    </div>
</body>

</html>
