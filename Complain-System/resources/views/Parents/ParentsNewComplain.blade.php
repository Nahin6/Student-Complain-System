
<!doctype html>
<html lang="en">

<head>
    <title>Make Complain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">

    <style>
        body{
            background-image: url("template/assets/images/background_picture_for_hero_section.png");
        background-size: cover;
        background-position: center center;
  /* background: #4ca1af;
  background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5);
  background: linear-gradient(to right, #4ca1af, #c4e0e5); */
        }
    </style>
</head>


<body>

    <div class="wrapper d-flex align-items-stretch">

        @include('Parents.ParentsSideNav')


        {{-- @include('Parents.ParentsHeroSection') --}}


       @include('Parents.ParentsNewComplainComponnents')
       {{-- @include('Parents.ParentsViewComplains') --}}


        {{-- @include('Parents.ParentsBody') --}}

    </div>

    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>
</body>


</html>
