{{-- <x-guest-layout style="background-color:aqua">
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors class="mb-4"  />

        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="userId" value="{{ __('Your ID') }}" />
                <x-jet-input id="userId" class="block mt-1 w-full" type="text" name="userId" :value="old('userId')"
                placeholder="Ignore if you are a Parent" onfocus="this.placeholder=''"
                onblur="this.placeholder='Ignore if you are a Parent'" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')"
                    required />
            </div>
            <div class="mt-4">
                <x-jet-label for="UserType" value="{{ __('Select your Designation') }}" />
                <select name="UserType" id="UserType" style="width: 100%; text-align: center">>

                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Parents">Parents</option>

                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="template/assets/css/LoginSignUp/LoginSignUp.css">
    <link rel="stylesheet"
        href="template/assets/css/LoginSignUp/fonts/material-icon/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>

    <div class="main">

        <section class="sign-in">
            <div class="container">
                {{-- <x-jet-validation-errors class="mb-4 error-message" /> --}}
                <div class="error-message" id="error-message"></div>
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="template/assets/images/registerPic-removebg-preview.png" alt="sing up image">
                        </figure>
                        <a href="{{ route('login') }}" class="signup-image-link">Already registered?</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">

                                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" placeholder="Your Name" />
                            </div>
                            <div class="form-group">

                                <x-jet-input id="email" class="block mt-1 w-full" type="number" name="userId"
                                    :value="old('name')" placeholder="Your ID / Ignore if you are a parent" />
                            </div>
                            <div class="form-group">

                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" placeholder="Your email" />
                            </div>
                            <div class="form-group">

                                <x-jet-input id="email" class="block mt-1 w-full" type="number" name="phone"
                                    :value="old('phone')" placeholder="Your Phone Number" />
                            </div>
                            <div class="form-group">

                                <select name="UserType" id="email" style="width: 100%; text-align: center"
                                    placeholder="Select your Designation">>
                                    <option value="" disabled selected>Select your Designation</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Parents">Parents</option>

                                </select>
                            </div>


                            <div class="form-group" id="pass-form">

                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    placeholder="Password" autocomplete="current-password" />
                                    <span id="show-password-icon" onclick="togglePasswordVisibility()">
                                        <i class="fas fa-eye"></i>
                                      </span>
                            </div>
                            <div class="form-group">

                                <x-jet-input id="re_password" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" placeholder="Confirm Password"
                                    autocomplete="current-password" />
                                    <span id="show-password-iconn" onclick="toggleRePasswordVisibility()">
                                        <i class="fas fa-eye"></i>
                                      </span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">

                                <x-jet-button id="signin" class="form-submit">
                                    {{ __('Register') }}
                                </x-jet-button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>





    <script>
        const form = document.getElementById('login-form');
        const errorMessage = document.getElementById('error-message');


        form.addEventListener('submit', (event) => {
            event.preventDefault();

            // Get form inputs
            const name = document.getElementsByName('name')[0].value.trim();
            const userId = document.getElementsByName('userId')[0].value.trim();
            const email = document.getElementsByName('email')[0].value.trim();
            const phone = document.getElementsByName('phone')[0].value.trim();
            const userType = document.getElementsByName('UserType')[0].value;
            const password = document.getElementsByName('password')[0].value.trim();
            const confirmPassword = document.getElementsByName('password_confirmation')[0].value.trim();

            // Validate inputs
            if (name === '') {
                showError('Please enter your name');

                return;
            }

            if (userId === '' && userType !== 'Parents') {
                showError('Please enter your ID');
                return;
            }

            if (email === '') {
                showError('Please enter your email');
                return;
            }

            if (!isValidEmail(email)) {
                showError('Please enter a valid email');
                return;
            }

            if (phone === '') {
                showError('Please enter your phone number');
                return;
            }

            if (!isValidPhone(phone)) {
                showError('Please enter a valid phone number');
                return;
            }

            if (userType === '') {
                showError('Please select your designation');
                return;
            }

            if (password === '') {
                showError('Please enter a password');
                return;
            }

            if (password.length < 8) {
                showError('Password must be at least 8 characters long');
                return;
            }

            if (confirmPassword === '') {
                showError('Please confirm your password');
                return;
            }

            if (password !== confirmPassword) {
                showError('Passwords do not match');

                return;
            }


            // If all inputs are valid, submit the form
            form.submit();
        });
        //password show
        function togglePasswordVisibility() {
  const passwordInput = document.getElementById("password");
  const showPasswordIcon = document.getElementById("show-password-icon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    showPasswordIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    passwordInput.type = "password";
    showPasswordIcon.innerHTML = '<i class="fas fa-eye"></i>';
  }
}
function toggleRePasswordVisibility() {
  const RepasswordInput = document.getElementById("re_password");
  const ReshowPasswordIcon = document.getElementById("show-password-iconn");

  if (RepasswordInput.type === "password") {
    RepasswordInput.type = "text";
    ReshowPasswordIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    RepasswordInput.type = "password";
    ReshowPasswordIcon.innerHTML = '<i class="fas fa-eye"></i>';
  }
}


        function showError(message) {

            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
        }

        function isValidEmail(email) {
            const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return pattern.test(email);
        }

        function isValidPhone(phone) {
            const pattern = /^\d{11}$/;
            return pattern.test(phone);
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
