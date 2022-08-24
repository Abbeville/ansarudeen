<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADYAN -- Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <!-- Header Start-->
    <header>
        <div class="navbar">
            <div class="navbar__brand">
                <img src="{{ asset('assets/images/header-logo.svg') }}" alt="Site Logo" class="site-logo">
                <p class="site-title">ADYAN <span class="site-title--em">LSC</span></p>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <main>
        <!-- Hero Section -->
        <section class="block block--bg-image hero-block">
            <div class="container hero__section">
                <h1 class="hero__main-header">Marital Seminar</h1>
                <h2 class="hero__sub-header">
                    Conscientous Navigation
                </h2>

                <p class="hero__description">
                    After the chills and fever of love, how nice and fruitful is the 98% of Marriage?
                    The willingness to do the right thing through righteous ways as a man, woman, couple as well as intending couple is the primary goal of every love story.
                    Do you wish to know how to add the right ingredients to your relationship? Then join Us Now
                </p>

                <a href="#registration-section " class="btn btn--primary hero__button">Register Now</a>
                <a href="#event-detail-section" class="btn btn--outline hero__button hero__button--outline">More Details</a>
            </div>
        </section>

        <!-- Event Venue Section -->
        <section class="block event-venue-block">
            <div class="container event-venue__section">
                <div class="block__header">
                    <div class="icon-container container--light">
                        <svg class="venue__icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 14C12.7166 14 11.6666 12.95 11.6666 11.6667C11.6666 10.3833 12.7166 9.33334 14 9.33334C15.2833 9.33334 16.3333 10.3833 16.3333 11.6667C16.3333 12.95 15.2833 14 14 14ZM21 11.9C21 7.66501 17.9083 4.66668 14 4.66668C10.0916 4.66668 6.99996 7.66501 6.99996 11.9C6.99996 14.63 9.27496 18.2467 14 22.5633C18.725 18.2467 21 14.63 21 11.9ZM14 2.33334C18.9 2.33334 23.3333 6.09001 23.3333 11.9C23.3333 15.7733 20.2183 20.3583 14 25.6667C7.78163 20.3583 4.66663 15.7733 4.66663 11.9C4.66663 6.09001 9.09996 2.33334 14 2.33334Z" fill="#067910"/>
                        </svg>
                    </div>
                    <h1 class="block__title">event venue</h1>
                    <h2 class="block__heading">
                        Lagos Oriental Hotel
                    </h2>
                    <p class="block__tagline">
                        3 Lekki - Epe Expy, Victoria Island 106104, Lagos
                    </p>
                </div>

                <div class="block__content">
                    <div class="carousel">
                        <div class="carousel__images">
                            <img src="{{ asset('assets/images/Rectangle 4.png') }}" alt="An image of an event hall" class="carousel__image image--active">
                            <img src="{{ asset('assets/images/Rectangle 6.png') }}" alt="An image of a center table in an event hall" class="carousel__image">
                            <img src="{{ asset('assets/images/Rectangle 7.png') }}" alt="An image of a round table settings of an event hall" class="carousel__image">
                        </div>
                        <div class="carousel__controller">
                            <div class="carousel__ellipse ellipse--active"></div>
                            <div class="carousel__ellipse"></div>
                            <div class="carousel__ellipse"></div>
                        </div>
                    </div>
                </div>
                <a class="direction-link" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=3%20Lekki%20-%20Epe%20Expy%2C%20Victoria%20Island%20106104%2C%20Lagos">Get direction</a>
            </div>
        </section>

        <!-- Event Details Section -->
        <section class="block block--lime event-details-section" id="event-detail-section">
            <div class="container">
                <div class="block__header">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 860">
                        <circle id="Ellipse 34" cx="21" cy="21" r="21" fill="#FBF0B6"/>
                        <g id="Group 859">
                        <g id="event_note_black_24dp">
                        <path id="Vector" d="M29.1667 10.5H28V8.16663H25.6667V10.5H16.3333V8.16663H14V10.5H12.8333C11.55 10.5 10.5 11.55 10.5 12.8333V29.1666C10.5 30.45 11.55 31.5 12.8333 31.5H29.1667C30.45 31.5 31.5 30.45 31.5 29.1666V12.8333C31.5 11.55 30.45 10.5 29.1667 10.5ZM29.1667 29.1666H12.8333V17.5H29.1667V29.1666ZM12.8333 15.1666V12.8333H29.1667V15.1666H12.8333ZM15.1667 19.8333H26.8333V22.1666H15.1667V19.8333ZM15.1667 24.5H23.3333V26.8333H15.1667V24.5Z" fill="#4C2D00"/>
                        </g>
                        </g>
                        </g>
                    </svg>

                    <h2 class="block__heading">
                        Event Details
                    </h2>
                </div>

                <div class="block__content">
                    <div class="grid grid--1x3 event-details">
                        <div class="event-detail event-detail--date">
                            <svg class="event-detail__icon" width="48" height="54" viewBox="0 0 48 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6667 5.99996H40V0.666626H34.6667V5.99996H13.3333V0.666626H8V5.99996H5.33333C2.37333 5.99996 0 8.39996 0 11.3333V48.6666C0 51.6 2.37333 54 5.33333 54H42.6667C45.6 54 48 51.6 48 48.6666V11.3333C48 8.39996 45.6 5.99996 42.6667 5.99996ZM42.6667 48.6666H5.33333V22H42.6667V48.6666ZM42.6667 16.6666H5.33333V11.3333H42.6667V16.6666ZM10.6667 27.3333H24V40.6666H10.6667V27.3333Z" fill="url(#paint0_linear_66_3942)"/>
                                <defs>
                                <linearGradient id="paint0_linear_66_3942" x1="24" y1="0.666626" x2="24" y2="54" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#37D279"/>
                                <stop offset="1" stop-color="#61DC95" stop-opacity="0.5"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <h3 class="event-detail__title event-detail--primary">Event date</h3>
                            <h4 class="event-detail__subtitle">Sat. 27th</h4>
                            <h5 class="event-detail__tagline event-detail--primary">August, 2022</h5>
                        </div>

                        <div class="event-detail event-detail--time">
                            <svg class="event-detail__icon" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27 0.333374C12.3334 0.333374 0.333374 12.3334 0.333374 27C0.333374 41.6667 12.3334 53.6667 27 53.6667C41.6667 53.6667 53.6667 41.6667 53.6667 27C53.6667 12.3334 41.6667 0.333374 27 0.333374ZM27 48.3334C15.24 48.3334 5.66671 38.76 5.66671 27C5.66671 15.24 15.24 5.66671 27 5.66671C38.76 5.66671 48.3334 15.24 48.3334 27C48.3334 38.76 38.76 48.3334 27 48.3334ZM28.3334 13.6667H24.3334V29.6667L38.2 38.2L40.3334 34.7334L28.3334 27.5334V13.6667Z" fill="url(#paint0_linear_66_3930)"/>
                                <defs>
                                <linearGradient id="paint0_linear_66_3930" x1="27" y1="0.333374" x2="27" y2="53.6667" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F2994A"/>
                                <stop offset="1" stop-color="#F5B47A" stop-opacity="0.5"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <h3 class="event-detail__title event-detail--accent">Start time</h3>
                            <h4 class="event-detail__subtitle">10:00 AM</h4>
                            <h5 class="event-detail__tagline event-detail--accent">WAT</h5>
                        </div>

                        <div class="event-detail event-detail--payment">
                            <svg class="event-detail__icon" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M76 56V24C76 19.6 72.4 16 68 16H12C7.6 16 4 19.6 4 24V56C4 60.4 7.6 64 12 64H68C72.4 64 76 60.4 76 56ZM68 56H12V24H68V56ZM40 28C33.36 28 28 33.36 28 40C28 46.64 33.36 52 40 52C46.64 52 52 46.64 52 40C52 33.36 46.64 28 40 28ZM92 28V72C92 76.4 88.4 80 84 80H16C16 76 16 76.4 16 72H84V28C88.4 28 88 28 92 28Z" fill="url(#paint0_linear_14_95)"/>
                                <defs>
                                <linearGradient id="paint0_linear_14_95" x1="48" y1="16" x2="48" y2="80" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white"/>
                                <stop offset="1" stop-color="#CCCCCC" stop-opacity="0.5"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <h3 class="event-detail__title event-detail--light">Payment</h3>
                            <h4 class="event-detail__subtitle">Single: 5,000</h4>
                            <h5 class="event-detail__tagline event-detail--light">Couple: 10,000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Details End -->

        <!-- Event Registration Section -->
        <section class="block block--dual-color event-registration-section" id="registration-section">
            <div class="container">
                <div class="block__header">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E5FFFB"/>
                        <g clip-path="url(#clip0_94_546)">
                        <path d="M49.7777 28.4445V21.3334C49.7777 19.3778 48.1777 17.7778 46.2222 17.7778H17.7777C15.8222 17.7778 14.2399 19.3778 14.2399 21.3334V28.4445C16.1955 28.4445 17.7777 30.0445 17.7777 32.0001C17.7777 33.9556 16.1955 35.5556 14.2222 35.5556V42.6667C14.2222 44.6223 15.8222 46.2223 17.7777 46.2223H46.2222C48.1777 46.2223 49.7777 44.6223 49.7777 42.6667V35.5556C47.8222 35.5556 46.2222 33.9556 46.2222 32.0001C46.2222 30.0445 47.8222 28.4445 49.7777 28.4445ZM46.2222 25.8489C44.1066 27.0756 42.6666 29.3867 42.6666 32.0001C42.6666 34.6134 44.1066 36.9245 46.2222 38.1512V42.6667H17.7777V38.1512C19.8933 36.9245 21.3333 34.6134 21.3333 32.0001C21.3333 29.3689 19.9111 27.0756 17.7955 25.8489L17.7777 21.3334H46.2222V25.8489ZM26.7911 39.1112L31.9999 35.7689L37.2088 39.1112L35.6266 33.1378L40.4088 29.2267L34.2399 28.8534L31.9999 23.1112L29.7422 28.8356L23.5733 29.2089L28.3555 33.1201L26.7911 39.1112Z" fill="#067910"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_94_546">
                        <rect width="42.6667" height="42.6667" fill="white" transform="translate(10.6666 10.6667)"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <h2 class="block__heading">
                        Event Registration
                    </h2>
                    <p class="block__tagline">
                        Complete the registration form and succesfully make payment for reservations.
                    </p>
                </div>

                <div class="block__content">
                    <div class="card registration-form">
                        <p style="font-size: 30px; text-align: center; line-height: 100px;">Registration Closed.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Registration Ends -->
    </main>

    <!-- Footer -->
    <footer class="block--solid-green">
        <div class="container footer">
            <img src="{{ asset('assets/images/footer-logo.svg') }}" alt="Site Logo on Footer" class="footer__site-logo">
            <p class="footer__site-name">Ansar-Ud-Deen Youth Association of Nigeria</p>
            <div class="footer-divider"></div>
            <p class="footer__text">Get in Touch</p>
            <div class="footer__contacts">
                <p class="footer__phone">+234 708 268 4450</p>
                <p class="footer__email">info@adyanlsc.org.ng</p>
            </div>
            <div class="footer__social-icons">
                <img src="{{ asset('assets/images/instagram.svg') }}" alt="Instagram Icon">
                <img src="{{ asset('assets/images/twitter.svg') }}" alt="Instagram Icon">
                <img src="{{ asset('assets/images/linkedin.svg') }}" alt="Instagram Icon">
            </div>
            <p class="footer__copyright">©2022 Ansarudeen Youth Association. All rights reserved</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script>
        const maxStep = 3;
        let currentStep = 0;

        let steps = document.querySelectorAll('.step');
        let tabs = document.querySelectorAll('.tab');

        let continueButton = document.querySelector('#continueButton')
        let backButton = document.querySelector('#backButton')
        let inputs = document.querySelectorAll('input');
        inputs.forEach((inputElement) => {
            inputElement.addEventListener("blur", (e) => {
                e.target.parentElement.classList.remove("form-error");

                let pattern = /[A-z0-9]@[a-z].[a-z]/;

                if(e.target.getAttribute('type') == 'email' && !pattern.test(e.target.value) ) {
                    e.target.parentElement.classList.add("form-error");
                }
            })
        })

        if(currentStep == 0 || currentStep == 3)
        {
            backButton.classList.add('btn--hide');
        }else{
            backButton.classList.remove('btn--hide');
        }

        continueButton.addEventListener("click", (e) => {
            e.preventDefault();

            if (currentStep < 2 && !validation(currentStep)) {
                console.log(currentStep);
                return;
            }
            steps[currentStep].classList.add('step--done');
            tabs[currentStep].classList.remove('tab--active');
            currentStep++
            steps[currentStep].classList.add('step--active');
            tabs[currentStep].classList.add('tab--active');

            (currentStep == 0 || currentStep == 3) ? backButton.classList.add('btn--hide') : backButton.classList.remove('btn--hide');
            (currentStep == 3) ? continueButton.classList.add('btn--hide') : continueButton.classList.remove('btn--hide');
            console.log('Binding...');
            bindData(currentStep);
        });

        backButton.addEventListener("click", (e) => {
            e.preventDefault();
            steps[currentStep].classList.remove('step--active');
            tabs[currentStep].classList.remove('tab--active');
            currentStep--
            steps[currentStep].classList.remove('step--done');
            steps[currentStep].classList.add('step--active');
            tabs[currentStep].classList.add('tab--active');

            (currentStep == 0 || currentStep == 3) ? backButton.classList.add('btn--hide') : backButton.classList.remove('btn--hide');
        });

        function validation(step){
            switch (step) {
                case 0:
                    const requiredFields = ['first_name', 'last_name', 'email', 'phone_number', 'location'];

                    for(let i = 0; i < requiredFields.length; i++) {
                        let inputField = document.querySelector(`input[name="${requiredFields[i]}"]`);

                        if (inputField.value == '') {
                            inputField.parentElement.classList.add('form-error');
                            inputField.focus();
                            return false;
                        }

                        let pattern = /[A-z0-9]@[a-z].[a-z]/;

                        if(inputField.getAttribute('type') == 'email' && !pattern.test(inputField.value)){
                            return false;
                        }
                    }
                    return true;

                    break;
                case 1:
                    const pageTwoRequiredFields = ['spouse_name'];
                    for(let i = 0; i < pageTwoRequiredFields.length; i++) {
                        if(pageTwoRequiredFields[i] == 'spouse_name') {
                            console.log(document.querySelector('input[name="attendance_choice"').value);
                            let inputField = document.querySelector(`input[name="${pageTwoRequiredFields[i]}"]`);
                            let attendanceChoices = document.querySelectorAll('input[name="attendance_choice"]');
                            let choice;
                            for(const attendanceChoice of attendanceChoices ) {
                                if (attendanceChoice.checked) {
                                    choice = attendanceChoice.value;
                                    break;
                                }
                            }
                            if (inputField.value == '' && choice == 'couple') {
                                inputField.parentElement.classList.add('form-error');
                                inputField.focus();
                                return false;
                            }
                        }
                    }
                    return true;
                    break;
                default:
                    break;
            }
        }

        function bindData(step) {

            if(step == 2) {
                let maritalStatuses = document.querySelectorAll('input[name="marital_status"]');
                let genders = document.querySelectorAll('input[name="gender"]');
                let programmeAwarenesses = document.querySelectorAll('input[name="programme_awareness"]');
                let attendanceChoices = document.querySelectorAll('input[name="attendance_choice"]');
                for(const maritalStatus of maritalStatuses ) {
                    if (maritalStatus.checked) {
                        document.querySelector('#marital_status').innerText = maritalStatus.value;
                        break;
                    }
                }
                for(const gender of genders ) {
                    if (gender.checked) {
                        document.querySelector('#gender').innerText = gender.value;
                        break;
                    }
                }
                for(const programmeAwareness of programmeAwarenesses ) {
                    if (programmeAwareness.checked) {
                        document.querySelector('#programme_awareness').innerText = programmeAwareness.value;
                        break;
                    }
                }
                for(const attendanceChoice of attendanceChoices ) {
                    if (attendanceChoice.checked) {
                        document.querySelector('#attendance_choice').innerText = attendanceChoice.value;
                        if (attendanceChoice.value == 'couple') {
                            document.querySelector('#ticket_amount').innerText = 'NGN 10,150';
                            document.querySelector('#ticket_type').innerText = 'Couple\'s Ticket';
                            document.querySelector('#paystack_amount').value = 10150 * 100;
                            document.querySelector('#paymentcode').value = "COUPLE's-TICKET";
                        }else {
                            document.querySelector('#ticket_amount').innerText = 'NGN 5,150';
                            document.querySelector('#ticket_type').innerText = 'Single\'s Ticket';
                            document.querySelector('#paystack_amount').value = 5150 * 100;
                            document.querySelector('#paymentcode').value = "SINGLE's-TICKET";
                        }
                        break;
                    }
                }
                let firstName = document.querySelector('input[name="first_name"]');
                document.querySelector('#first_name').innerText = firstName.value;


                let lastName = document.querySelector('input[name="last_name"]');
                document.querySelector('#last_name').innerText = lastName.value;

                let email = document.querySelector('input[name="email"]');
                document.querySelector('#email').innerText = email.value;

                let phoneNumber = document.querySelector('input[name="phone_number"]');
                document.querySelector('#phone_number').innerText = phoneNumber.value;

                let otherAwareness = document.querySelector('input[name="other_awareness"]');
                if (otherAwareness.value == '') {
                    document.querySelector('#other_awareness').innerText = '';
                }else{
                    document.querySelector('#other_awareness').innerText = otherAwareness.value;
                }

                let location = document.querySelector('input[name="location"]');
                document.querySelector('#location').innerText = location.value;

                let spouseName = document.querySelector('input[name="spouse_name"]');
                document.querySelector('#spouse_name').innerText = spouseName.value;

                let expectation = document.querySelector('textarea[name="expectation"]');
                document.querySelector('#expectation').innerText = expectation.value;

                let question = document.querySelector('textarea[name="question"]');
                document.querySelector('#question').innerText = question.value;
            }
        }
    </script>
    <script>
        let radio_buttons = document.querySelectorAll('.button-radio');

        radio_buttons.forEach((button) => {
            button.addEventListener('click', (e) => {
                let selectedButton = e.target;
                let nameAttr = selectedButton.getAttribute('data-modifier');
                toggleClick(nameAttr);
            });
        });

        function toggleClick(attr) {
            const query = `[data-modifier="${attr}"]`;
            let items = document.querySelectorAll(query);

            items[0].addEventListener('click', (e) => {
                items[1].classList.remove('button-radio--accent');
                e.target.classList.add('button-radio--accent');
            });
            items[1].addEventListener('click', (e) => {
                items[0].classList.remove('button-radio--accent');
                e.target.classList.add('button-radio--accent');
            });
        }

        toggleClick('gender');
        toggleClick('marital_status');
        toggleClick('attendance_choice');

    </script>
    <script>
        let controllers = document.querySelectorAll('.carousel__ellipse');
        let images = document.querySelectorAll('.carousel__image');

        controllers.forEach((ellipse, index) => {
            ellipse.addEventListener("click", (e) => {
                for(let i=0; i < controllers.length; i++){
                    if (index != i) {
                        images[i].classList.remove("image--active");
                        controllers[i].classList.remove("ellipse--active");
                    }else{
                        images[i].classList.add("image--active");
                        controllers[i].classList.add("ellipse--active");
                    }
                }
            })
        })
    </script>
</body>
</html>
