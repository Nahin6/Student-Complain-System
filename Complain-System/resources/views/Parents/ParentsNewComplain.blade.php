
<!doctype html>
<html lang="en">

<head>
    <title>Make Complain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">
    <link rel="stylesheet" href="template/assets/css/form/util.css">
    <link rel="stylesheet" href="template/assets/css/form/main.css">
    <style>
        body{

  background: #4ca1af;
  background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5);
  background: linear-gradient(to right, #4ca1af, #c4e0e5);
        }
    </style>
</head>


<body>

    <div class="wrapper d-flex align-items-stretch">

        @include('Parents.ParentsSideNav')

        <div class="contact1">
            <div class="container-contact1">
                @include('sweetalert::alert')
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="template/assets/images/img-01.png" alt="IMG">
                </div>
                <form action="{{ url('ParentsNewComPlainSubmit') }}" name="ParentForm" class="contact1-form validate-form" method="POST"
                enctype="multipart/form-data">

                @csrf
                <div class="error-message" id="error-message"></div>
                    <span class="contact1-form-title">
                        Make a new complain
                    </span>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">

                        <label for="" class="complain-lvl">Complain Type</label>
                        <select name="ComplainType" class="input1" id="ComplainDropDown">
                            <option value="" disabled selected>Select a Complain Type</option>
                            <option value="Normal">Normal</option>
                            <option value="Argent">Argent</option>
                            <span class="shadow-input1"></span>

                        </select>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">

                        <label for="" class="complain-lvl">Complain Section</label>
                        <select name="ComplainSection" class="input1" id="ComplainDropDown">
                            <option value="" disabled selected>Select a Complain Section</option>
                            <option value="IT">IT</option>
                            <option value="Lab">Lab</option>
                            <option value="Administrator">Administrator</option>
                            <option value="General">General</option>
                            <span class="shadow-input1"></span>

                        </select>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                        <label for="" class="complain-lvl">Write in details about your Complain</label>
                        <textarea class="input1" name="message" placeholder="Message"></textarea>
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



       {{-- @include('Parents.ParentsNewComplainComponnents') --}}


    </div>

    <script src="template/assets/js/NavJs/jquery.min.js"></script>
    <script src="template/assets/js/NavJs/popper.js"></script>
    <script src="template/assets/js/NavJs/bootstrap.min.js"></script>
    <script src="template/assets/js/NavJs/main.js"></script>
    <script>


        const form = document.getElementById('ParentForm');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', (event) => {
            event.preventDefault();


            const ComplainType = document.getElementsByName('ComplainType')[0].value.trim();
            const ComplainSection = document.getElementsByName('ComplainSection')[0].value.trim();
            const Description = document.getElementsByName('message')[0].value.trim();

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
