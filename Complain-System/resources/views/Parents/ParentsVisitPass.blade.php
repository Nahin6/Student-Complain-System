{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visiting Pass</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">
    <link rel="stylesheet" href="template/assets/css/form/util.css">
    <link rel="stylesheet" href="template/assets/css/form/main.css">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        @include('Parents.ParentsSideNav')
        @include('sweetalert::alert')

                        <div class="booking-form">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Name</span>
                                            <input class="form-control" type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Phone</span>
                                    <input class="form-control" type="tel" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Pickup Location</span>
                                    <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Destination</span>
                                    <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="form-label">Pickup Date</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Hour</span>
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Min</span>
                                                    <select class="form-control">
                                                        <option>05</option>
                                                        <option>10</option>
                                                        <option>15</option>
                                                        <option>20</option>
                                                        <option>25</option>
                                                        <option>30</option>
                                                        <option>35</option>
                                                        <option>40</option>
                                                        <option>45</option>
                                                        <option>50</option>
                                                        <option>55</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">AM/PM</span>
                                                    <select class="form-control">
                                                        <option>AM</option>
                                                        <option>PM</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-N99t+RaPwD2yNf/NU3Yd9b9ViARrI5P5oJit5pLzB/iBJ+7Vj67HHgkkv7V2Q73QF1+DgPFKjGccmih/v+SzA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        @include('Parents.ParentsSideNav')
        @include('sweetalert::alert')

        <div class="contact1">

            <div class="container-contact1">

                {{-- <form action="{{ url('TeacherNewComPlainSubmit') }}" class="contact1-form-teacher validate-form"
                    method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <label for="" class="complain-lvl">Your Name</label>
                        <input class="input1" type="text" name="name" placeholder="Name">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label for="" class="complain-lvl">Your Email</label>
                        <input class="input1" type="email" name="email" placeholder="Email">
                        <span class="shadow-input1"></span>

                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <label for="" class="complain-lvl">Your Number</label>
                        <input class="input1" type="number" name="phone" placeholder="phone">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <label for="" class="complain-lvl">ID of the student you are visiting</label>
                        <input class="input1" type="number" name="StudentId" placeholder="Student ID">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <label for="" class="complain-lvl">Relationship to the student</label>
                        <select name="ComplainType" class="input1" id="ComplainDropDown">
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Sister">Sister</option>
                            <option value="Brother">Brother</option>
                            <span class="shadow-input1"></span>
                        </select>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                        <label for="" class="complain-lvl">Purpose of the visit</label>
                        <textarea class="input1" name="Purpose" placeholder="Purpose"></textarea>
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
                </form> --}}

                <form action="{{ url('ApplyForVisitPassSubmit') }}" id="VisitForm" class="contact1-form-visit validate-form"
                    method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="error-message" id="error-message"></div>
                    <div class="row">
                        <div class="col-md-6 wrap-input1 validate-input" data-validate="Name is required">
                            <label for="" class="complain-lvl">Your Name</label>
                            <input class="input1" type="text" name="name" placeholder="Name">
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="col-md-6 wrap-input1 validate-input"
                            data-validate="Valid email is required: ex@abc.xyz">
                            <label for="" class="complain-lvl">Your Email</label>
                            <input class="input1" type="email" name="email" placeholder="Email">
                            <span class="shadow-input1"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 wrap-input1 validate-input" data-validate="Name is required">
                            <label for="" class="complain-lvl">Your Number</label>
                            <input class="input1" type="number" name="phone" placeholder="phone">
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="col-md-6 wrap-input1 validate-input" data-validate="Name is required">
                            <label for="" class="complain-lvl">ID of the student you are visiting</label>
                            <input class="input1" type="number" name="StudentId" placeholder="Student ID">
                            <span class="shadow-input1"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 wrap-input1 validate-input" data-validate="Name is required">
                            <label for="" class="complain-lvl">Relationship to the student</label>
                            <select name="RelationOfStudent" class="input1" id="ComplainDropDown">
                                <option value="" disabled selected>Relationship to the student</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Sister">Sister</option>
                                <option value="Brother">Brother</option>
                                <span class="shadow-input1"></span>
                            </select>
                        </div>
                        <div class="col-md-6 wrap-input1 validate-input" data-validate="Name is required">
                            <label for="" class="complain-lvl">Date and time of the visit</label>
                            <input class="input1" type="date" name="Date" placeholder="Date">
                            <span class="shadow-input1"></span>
                        </div>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <label for="" class="complain-lvl">Select a suitable time for your visit</label>
                        <select name="VisitHour" class="input1" id="ComplainDropDown">
                            <option value="" disabled selected>Select a suitable time for your visit</option>
                            <option value="9:00am-12:00pm">9:00am-12:00pm</option>
                            <option value="12:00pm-2:00pm">12:00pm-2:00pm</option>
                            <option value="2:00pm-5pm">2:00pm-5:00pm</option>
                            <span class="shadow-input1"></span>
                        </select>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                        <label for="" class="complain-lvl">Purpose of the visit</label>
                        <textarea class="input1" name="Purpose" placeholder="Purpose"></textarea>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-0rR5ZtjOZ5N4j4Kj4E/BW8LGvDpYIDdG/6OrS7M2Fquvq3qQ2KRRPNzCOw6W8cPzgTjXoU6xkU1WkrU6DuknOw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
   const form = document.getElementById('VisitForm');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', (event) => {
            event.preventDefault();


            const name = document.getElementsByName('name')[0].value.trim();
            const email = document.getElementsByName('email')[0].value.trim();
            const phone = document.getElementsByName('phone')[0].value.trim();
            const StudentId = document.getElementsByName('StudentId')[0].value.trim();
            const RelationOfStudent = document.getElementsByName('RelationOfStudent')[0].value.trim();
            const Date = document.getElementsByName('Date')[0].value.trim();
            const VisitHour = document.getElementsByName('VisitHour')[0].value.trim();
            const Purpose = document.getElementsByName('Purpose')[0].value.trim();
            

            if (name === '') {
                showError('Please enter your name.');

                return;
            }

            if (email === '') {
                showError('Please enter your email.');
                return;
            }
            if (phone === '') {
                showError('Please provide your phone number.');
                return;
            }

            if (StudentId === '') {
                showError('Please enter your child ID number ');
                return;
            }
            if (RelationOfStudent === '') {
                showError('Please select your relation with student ');
                return;
            }
            if (Date === '') {
                showError('Plese selct a date you want to visit ');
                return;
            }
            if (VisitHour === '') {
                showError('Please selct a time when you want to visit ');
                return;
            }
            if (Purpose === '') {
                showError('Please describe your purpose of visiting ');
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
            }, 5000);
        }
    </script>

</body>

</html>
