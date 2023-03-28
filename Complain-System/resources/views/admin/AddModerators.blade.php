{{-- <!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('sweetalert::alert')

        @include('admin.adminLinks')

        @include('admin.AdminSideNav')

        <form action="{{ url('AddModeratorButton') }}" class="col-12 grid-margin stretch-card" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            Add Moderators
                        </h4>
                        <p class="card-description">
                           Add Moderators
                        </p>
                        <form class="forms-sample" >
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail3"
                                    placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="exampleInputName1" placeholder="Phone Number" />
                            </div>

                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary me-2">
                                   ADD
                                </button>


                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </form>

        @include('Student.StudentHeaderNav')



</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Complain</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">
    <link rel="stylesheet" href="template/assets/css/form/util.css">
    <link rel="stylesheet" href="template/assets/css/form/main.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">

        @include('admin.AdminSideNav')
        @include('sweetalert::alert')
        <div class="contact1">

            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="template/assets/images/admin.png" alt="IMG">
                </div>
                <form action="{{ url('AddModeratorButton') }}" id="AddModerator"
                    class="contact1-form-AddMod validate-form" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="error-message" id="error-message"></div>
                    <span class="contact1-form-title">
                        Welcome <span class="contact1-form-title-two">{{ Auth::user()->name }}</span> Add Moderator to
                        our system for better service to our students teachers and parents
                    </span>
                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label for="" class="complain-lvl">Moderator Name</label>
                        <input class="input1" type="text" name="name" placeholder="Name">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label for="" class="complain-lvl">Moderator Email</label>
                        <input class="input1" type="email" name="email" placeholder="Email">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label for="" class="complain-lvl">Moderator Number</label>
                        <input class="input1" type="number" name="phone" placeholder=" Phone Number">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">

                        <label for="" class="complain-lvl">Moderator Type</label>
                        <select name="ModeratorType" class="input1" id="ComplainDropDown">
                            <option value="" disabled selected>Select Moderator Type</option>
                            <option value="IT">IT</option>
                            <option value="Lab">Lab</option>
                            <option value="Administrator">Administrator</option>
                            <option value="General">General</option>
                            <span class="shadow-input1"></span>

                        </select>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn">
                            <span>
                                Submit Complain
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> --}}
    <script>
        const form = document.getElementById('AddModerator');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', (event) => {
            event.preventDefault();


            const name = document.getElementsByName('name')[0].value.trim();
            const email = document.getElementsByName('email')[0].value.trim();
            const phone = document.getElementsByName('phone')[0].value.trim();
            const ModeratorType = document.getElementsByName('ModeratorType')[0].value.trim();

            if (name === '') {
                showError('Please Enter Moderator name');

                return;
            }

            if (email === '') {
                showError('Please Enter Moderator email');
                return;
            }

            if (phone === '') {
                showError('Please Enter Moderator phone number');
                return;
            }
            if (ModeratorType === '') {
                showError('Please select Moderator department');
                return;
            }
            form.submit();
        });

        function showError(message) {

            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
        }

        function showError(message) {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
            errorMessage.scrollIntoView({
                behavior: 'smooth'
            });
            setTimeout(() => {
                errorMessage.style.display = 'none';
            }, 4000);
        }
    </script>


</body>

</html>
