{{-- <!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
       @include('sweetalert::alert')

        @include('Student.StudentLinks')

        @include('Student.StudentSideNav')



        <form action="{{ url('MakeNewComPlainButton') }}" class="col-12 grid-margin stretch-card" method="POST"
             enctype="multipart/form-data">
            @csrf

            <div class="col-12 grid-margin stretch-card">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">
                            Make a complain
                        </h4>

                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1" class="mt-1">Complain Type</label>
                                <select name="ComplainType" class="form-control" id="exampleInputEmail3"
                                    style="width: 100%; text-align: center; color:white;font-size: 18px;
                                    font-weight: bold;">

                                    <option value="Normal">Normal</option>
                                    <option value="Argent">Argent</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Complain Section</label>
                                <select name="ComplainSection" class="form-control" id="exampleInputEmail3"
                                    style="width: 100%; text-align: center; color:white;font-size: 18px;
                                    font-weight: bold;">

                                    <option value="IT">IT</option>
                                    <option value="LAb">Lab</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="General">General</option>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>



                                <textarea class="form-control" name="Description" id="exampleTextarea1" rows="4" style="height: 200px;"></textarea>
                            </div>

                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary me-2">
                                    Submit Complain
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
    @include('Student.StudentSideNav')
    @include('sweetalert::alert')
        <div class="contact1">

            <div class="container-contact1">

                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="template/assets/images/img-01.png" alt="IMG">
                </div>
                <form action="{{ url('MakeNewComPlainButton') }}" id="myForm" class="contact1-form-Student validate-form" method="POST"
                enctype="multipart/form-data">

                @csrf
                <div class="error-message" id="error-message"></div>
                <span class="contact1-form-title">
                    Welcome <span class="contact1-form-title-two">{{ Auth::user()->name }}</span> Your feedback matters - report any concerns and help us create a safe and supportive learning community.
                </span>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">

                        <label for="" class="complain-lvl">Complain Type</label>
                        <select name="ComplainType" class="input1" id="ComplainDropDown">

                            <option value="Normal">Normal</option>
                            <option value="Argent">Argent</option>
                            <span class="shadow-input1"></span>

                        </select>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">

                        <label for="" class="complain-lvl">Complain Section</label>
                        <select name="ComplainSection" class="input1" id="ComplainDropDown">

                            <option value="IT">IT</option>
                            <option value="Lab">Lab</option>
                            <option value="Administrator">Administrator</option>
                            <option value="General">General</option>
                            <span class="shadow-input1"></span>

                        </select>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                        <label for="" class="complain-lvl">Write in details about your Complain</label>
                        <textarea class="input1" name="Description" placeholder="Message"></textarea>
                        <span class="shadow-input1"></span>
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


    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> --}}
    <script>


        const form = document.getElementById('myForm');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', (event) => {
            event.preventDefault();


            const ComplainType = document.getElementsByName('ComplainType')[0].value.trim();
            const ComplainSection = document.getElementsByName('ComplainSection')[0].value.trim();
            const Description = document.getElementsByName('Description')[0].value.trim();

            if (ComplainType === '') {
                showError('Please select a Complain Type.');

                return;
            }

            if (ComplainSection === '') {
                showError('Please select a Complain Section.');
                return;
            }

            if (Description === '') {
                showError('Please Discribe your problems');
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
