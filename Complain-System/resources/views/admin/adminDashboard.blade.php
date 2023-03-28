{{-- <!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('sweetalert::alert')
        @include('admin.AdminLinks')

        @include('admin.AdminSideNav')

        @include('admin.AdminHeaderNav')

        @include('admin.body')

    </div>
</body>

</html> --}}



<!doctype html>
<html lang="en">

<head>
    <title>Complain system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">

    <style>
        body{
         
  background: #1cb19b;
  background: -webkit-linear-gradient(to right, #22845c, #93c152);
  background: linear-gradient(to right, #4caf8b, #8ee3f4);

        }
    </style>
</head>


<body>

    <div class="wrapper d-flex align-items-stretch">

        @include('admin.AdminSideNav')
        @include('admin.AdminHeroSection')

    </div>

    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>
</body>


</html>
