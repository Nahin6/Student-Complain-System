<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/assets/css/parents/style.css">
    <link rel="stylesheet" href="template/assets/css/form/util.css">
    <link rel="stylesheet" href="template/assets/css/form/main.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <div class="contact1">
            <div class="container-contact1">
                @include('sweetalert::alert')
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="template/assets/images/img-01.png" alt="IMG">
                </div>
                <form action="{{ url('ParentsNewComPlainSubmit') }}" class="contact1-form validate-form" method="POST"
                enctype="multipart/form-data">

                @csrf
                    <span class="contact1-form-title">
                        Make a new complain
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
                            <option value="LAb">Lab</option>
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

    </div>


    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>
