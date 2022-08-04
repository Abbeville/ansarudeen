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
                        <ul class="progress-steps">
                            <li class="step step--active">
                                <div class="icon-container">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.99999 3.99999C8.73332 3.99999 9.33332 4.59999 9.33332 5.33332C9.33332 6.06666 8.73332 6.66666 7.99999 6.66666C7.26666 6.66666 6.66666 6.06666 6.66666 5.33332C6.66666 4.59999 7.26666 3.99999 7.99999 3.99999ZM7.99999 10.6667C9.79999 10.6667 11.8667 11.5267 12 12H3.99999C4.15332 11.52 6.20666 10.6667 7.99999 10.6667ZM7.99999 2.66666C6.52666 2.66666 5.33332 3.85999 5.33332 5.33332C5.33332 6.80666 6.52666 7.99999 7.99999 7.99999C9.47332 7.99999 10.6667 6.80666 10.6667 5.33332C10.6667 3.85999 9.47332 2.66666 7.99999 2.66666ZM7.99999 10.6667C6.21999 10.6667 2.66666 11.56 2.66666 13.3333V14.6667H13.3333V13.3333C13.3333 11.56 9.77999 10.6667 7.99999 10.6667Z" fill="#333333"/>
                                    </svg>
                                </div>
                            </li>
                            <li class="step">
                                <div class="icon-container">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.99998 10C4.73331 10 5.33331 10.6 5.33331 11.3333C5.33331 12.0667 4.73331 12.6667 3.99998 12.6667C3.26665 12.6667 2.66665 12.0667 2.66665 11.3333C2.66665 10.6 3.26665 10 3.99998 10ZM3.99998 8.66667C2.53331 8.66667 1.33331 9.86667 1.33331 11.3333C1.33331 12.8 2.53331 14 3.99998 14C5.46665 14 6.66665 12.8 6.66665 11.3333C6.66665 9.86667 5.46665 8.66667 3.99998 8.66667ZM7.99998 3.33333C8.73331 3.33333 9.33331 3.93333 9.33331 4.66667C9.33331 5.4 8.73331 6 7.99998 6C7.26665 6 6.66665 5.4 6.66665 4.66667C6.66665 3.93333 7.26665 3.33333 7.99998 3.33333ZM7.99998 2C6.53331 2 5.33331 3.2 5.33331 4.66667C5.33331 6.13333 6.53331 7.33333 7.99998 7.33333C9.46665 7.33333 10.6666 6.13333 10.6666 4.66667C10.6666 3.2 9.46665 2 7.99998 2ZM12 10C12.7333 10 13.3333 10.6 13.3333 11.3333C13.3333 12.0667 12.7333 12.6667 12 12.6667C11.2666 12.6667 10.6666 12.0667 10.6666 11.3333C10.6666 10.6 11.2666 10 12 10ZM12 8.66667C10.5333 8.66667 9.33331 9.86667 9.33331 11.3333C9.33331 12.8 10.5333 14 12 14C13.4666 14 14.6666 12.8 14.6666 11.3333C14.6666 9.86667 13.4666 8.66667 12 8.66667Z" fill="#333333"/>
                                    </svg>
                                </div>
                            </li>
                            <li class="step">
                                <div class="icon-container">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.99998 10.78L3.21998 7.99999L2.27332 8.93999L5.99998 12.6667L14 4.66665L13.06 3.72665L5.99998 10.78Z" fill="#044904"/>
                                    </svg>
                                </div>
                            </li>
                            <li class="step">
                                <div class="icon-container">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6667 9.33332V3.99999C12.6667 3.26666 12.0667 2.66666 11.3334 2.66666H2.00008C1.26675 2.66666 0.666748 3.26666 0.666748 3.99999V9.33332C0.666748 10.0667 1.26675 10.6667 2.00008 10.6667H11.3334C12.0667 10.6667 12.6667 10.0667 12.6667 9.33332ZM11.3334 9.33332H2.00008V3.99999H11.3334V9.33332ZM6.66675 4.66666C5.56008 4.66666 4.66675 5.55999 4.66675 6.66666C4.66675 7.77332 5.56008 8.66666 6.66675 8.66666C7.77341 8.66666 8.66675 7.77332 8.66675 6.66666C8.66675 5.55999 7.77341 4.66666 6.66675 4.66666ZM15.3334 4.66666V12C15.3334 12.7333 14.7334 13.3333 14.0001 13.3333H2.66675C2.66675 12.6667 2.66675 12.7333 2.66675 12H14.0001V4.66666C14.7334 4.66666 14.6667 4.66666 15.3334 4.66666Z" fill="#333333"/>
                                    </svg>
                                </div>
                            </li>
                        </ul>

                        <!-- <div class="tabs"> -->
                            <form action="{{ route('pay') }}" method="POST" class="tabs">
                                @csrf
                                <input type="hidden" name="payment_method" value="both" />
                                <input type="hidden" name="description" value="Ticket Purchase" />
                                <input type="hidden" name="country" value="NG" />
                                <input type="hidden" name="currency" value="NGN" />
                                <input type="hidden" name="paymentcode" id="paymentcode" value="">
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}" />
                                <input type="hidden" name="logo" />
                                <input type="hidden" name="title" value="{{ config('app.name') }}" />
                                <input type="hidden" name="amount" id="paystack_amount" value="" />
                                <!-- Tab 1 -->
                                <div class="tab tab--active" id="tab-1">
                                    <header class="tab-header">
                                        <div class="tab-title">Personal Details</div>
                                            @if($errors->any())
                                                <div style="background-color: rgb(230, 155, 127); padding: 20px 40px; min-width: 200px; color: white; font-size: 15px; margin: 10px 10px">
                                                    <p><strong>Opps Something went wrong</strong></p>
                                                    <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                                @if(session()->has('success'))
                                                <div style="background-color: rgb(131, 242, 199); padding: 20px 40px; min-width: 200px; color: white; font-size: 15px; margin: 10px 10px">
                                                    <p><strong>{!! session()->get('success') !!} </strong></p>
                                                </div>

                                            @endif
                                    </header>
                                    <section class="tab-content">

                                        <div class="form-group">
                                            <label for="" class="form-label">First name</label>
                                            <div class="input-group">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.99999 3.99999C8.73332 3.99999 9.33332 4.59999 9.33332 5.33332C9.33332 6.06666 8.73332 6.66666 7.99999 6.66666C7.26666 6.66666 6.66666 6.06666 6.66666 5.33332C6.66666 4.59999 7.26666 3.99999 7.99999 3.99999ZM7.99999 10.6667C9.79999 10.6667 11.8667 11.5267 12 12H3.99999C4.15332 11.52 6.20666 10.6667 7.99999 10.6667ZM7.99999 2.66666C6.52666 2.66666 5.33332 3.85999 5.33332 5.33332C5.33332 6.80666 6.52666 7.99999 7.99999 7.99999C9.47332 7.99999 10.6667 6.80666 10.6667 5.33332C10.6667 3.85999 9.47332 2.66666 7.99999 2.66666ZM7.99999 10.6667C6.21999 10.6667 2.66666 11.56 2.66666 13.3333V14.6667H13.3333V13.3333C13.3333 11.56 9.77999 10.6667 7.99999 10.6667Z" fill="#333333"/>
                                                </svg>
                                                <input type="text" class="input form-error" name="first_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Last Name</label>
                                            <div class="input-group">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.99999 3.99999C8.73332 3.99999 9.33332 4.59999 9.33332 5.33332C9.33332 6.06666 8.73332 6.66666 7.99999 6.66666C7.26666 6.66666 6.66666 6.06666 6.66666 5.33332C6.66666 4.59999 7.26666 3.99999 7.99999 3.99999ZM7.99999 10.6667C9.79999 10.6667 11.8667 11.5267 12 12H3.99999C4.15332 11.52 6.20666 10.6667 7.99999 10.6667ZM7.99999 2.66666C6.52666 2.66666 5.33332 3.85999 5.33332 5.33332C5.33332 6.80666 6.52666 7.99999 7.99999 7.99999C9.47332 7.99999 10.6667 6.80666 10.6667 5.33332C10.6667 3.85999 9.47332 2.66666 7.99999 2.66666ZM7.99999 10.6667C6.21999 10.6667 2.66666 11.56 2.66666 13.3333V14.6667H13.3333V13.3333C13.3333 11.56 9.77999 10.6667 7.99999 10.6667Z" fill="#333333"/>
                                                </svg>
                                                <input type="text" class="input" name="last_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Email address</label>
                                            <div class="input-group">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.5 4.5C16.5 3.675 15.825 3 15 3H3C2.175 3 1.5 3.675 1.5 4.5V13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5ZM15 4.5L9 8.25L3 4.5H15ZM15 13.5H3V6L9 9.75L15 6V13.5Z" fill="#CFCEC9"/>
                                                </svg>
                                                <input type="email" class="input" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Phone Number</label>
                                            <div class="input-group">
                                                {{-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.5 4.5C16.5 3.675 15.825 3 15 3H3C2.175 3 1.5 3.675 1.5 4.5V13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5ZM15 4.5L9 8.25L3 4.5H15ZM15 13.5H3V6L9 9.75L15 6V13.5Z" fill="#CFCEC9"/>
                                                </svg> --}}
                                                <input type="number" class="input" name="phone_number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Marital Status</span>
                                            <div class="radio-button-group">
                                                <label for="single" data-modifier="marital_status" class="button-radio button-radio--accent">Single</label>
                                                <label for="married" data-modifier="marital_status" class="button-radio">Married</label>
                                                <input type="radio" id="single" name="marital_status" value="single" checked>
                                                <input type="radio" id="married" name="marital_status" value="married">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Gender</span>
                                            <div class="radio-button-group">
                                                <label for="male" data-modifier="gender" class="button-radio button-radio--accent">Male</label>
                                                <label for="female" data-modifier="gender" class="button-radio">Female</label>
                                                <input type="radio" id="male" name="gender" value="male" >
                                                <input type="radio" id="female" name="gender" value="female" checked>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Location</label>
                                            <div class="input-group">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 9C8.175 9 7.5 8.325 7.5 7.5C7.5 6.675 8.175 6 9 6C9.825 6 10.5 6.675 10.5 7.5C10.5 8.325 9.825 9 9 9ZM13.5 7.65C13.5 4.9275 11.5125 3 9 3C6.4875 3 4.5 4.9275 4.5 7.65C4.5 9.405 5.9625 11.73 9 14.505C12.0375 11.73 13.5 9.405 13.5 7.65ZM9 1.5C12.15 1.5 15 3.915 15 7.65C15 10.14 12.9975 13.0875 9 16.5C5.0025 13.0875 3 10.14 3 7.65C3 3.915 5.85 1.5 9 1.5Z" fill="#CFCEC9"/>
                                                </svg>
                                                <input type="text" class="input" name="location">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span for="" class="form-label">How did you hear about this programme?</span>

                                            <div class="custom-radio-group">
                                                <input type="radio" id="ads_mosque" class="custom-radio" name="programme_awareness" value="ADS Mosque" checked>
                                                <label for="ads_mosque">ADS Mosque</label>
                                            </div>
                                            <div class="custom-radio-group">
                                                <input type="radio" id="adyan" class="custom-radio" name="programme_awareness" value="ADYAN Platforms">
                                                <label for="adyan">ADYAN Platforms</label>
                                            </div>
                                            <div class="custom-radio-group">
                                                <input type="radio" id="social_media" class="custom-radio" name="programme_awareness" value="social_media">
                                                <label for="social_media">Social Media</label>
                                            </div>
                                            <div class="custom-radio-group">
                                                <input type="radio" id="a_friend" class="custom-radio" name="programme_awareness" value="a_friend">
                                                <label for="a_friend">A Friend</label>
                                            </div>
                                            <div class="custom-radio-group">
                                                <input type="radio" id="others" class="custom-radio" name="programme_awareness" value="others">
                                                <label for="others">Others</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="input" name="other_awareness">
                                            </div>
                                        </div>
                                    </section>

                                </div>

                                <!-- Tab 2 -->
                                <div class="tab" id="tab-2">
                                    <header class="tab-header">
                                        <div class="tab-title">Preference</div>
                                    </header>
                                    <section class="tab-content">
                                        <div class="form-group">
                                            <span class="form-label">Attendance Choice</span>
                                            <div class="radio-button-group">
                                                <label for="attendance_single" data-modifier="attendance_choice" class="button-radio button-radio--accent">Single</label>
                                                <label for="attendance_couple" data-modifier="attendance_choice" class="button-radio">Couple</label>
                                                <input type="radio" id="attendance_single" name="attendance_choice" value="single" checked>
                                                <input type="radio" id="attendance_couple" name="attendance_choice" value="couple">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Spouse's Name</label>
                                            <div class="input-group">
                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.375 0.25C10.07 0.25 8.8175 0.8575 8 1.8175C7.1825 0.8575 5.93 0.25 4.625 0.25C2.315 0.25 0.5 2.065 0.5 4.375C0.5 7.21 3.05 9.52 6.9125 13.03L8 14.0125L9.0875 13.0225C12.95 9.52 15.5 7.21 15.5 4.375C15.5 2.065 13.685 0.25 11.375 0.25ZM8.075 11.9125L8 11.9875L7.925 11.9125C4.355 8.68 2 6.5425 2 4.375C2 2.875 3.125 1.75 4.625 1.75C5.78 1.75 6.905 2.4925 7.3025 3.52H8.705C9.095 2.4925 10.22 1.75 11.375 1.75C12.875 1.75 14 2.875 14 4.375C14 6.5425 11.645 8.68 8.075 11.9125Z" fill="#CFCEC9"/>
                                                </svg>
                                                <input type="text" class="input" name="spouse_name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Your expectations from the programme?</label>
                                            <textarea name="expectation" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Your possible questions for the panelists?</label>
                                            <textarea name="question" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>
                                </div>

                                <!-- Tab 3 -->
                                <div class="tab" id="tab-3">
                                    <header class="tab-header">
                                        <div class="tab-title">Confirm Details</div>
                                    </header>
                                    <section class="tab-content">
                                        <div class="personal">
                                            <div class="grid form-grid--1x2 form-grid--1x3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">First Name</label>
                                                    <p class="form-text" id="first_name"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Last Name</label>
                                                    <p class="form-text" id="last_name"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Marital Status</label>
                                                    <p class="form-text" id="marital_status"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Gender</label>
                                                    <p class="form-text" id="gender"></p>
                                                </div>
                                            </div>
                                            <div class="grid form-grid--1x3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Location</label>
                                                    <p class="form-text" id="location"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Email Address</label>
                                                    <p class="form-text" id="email"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Phone Number</label>
                                                    <p class="form-text" id="phone_number"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">How did you hear about this programme?</label>
                                                <p class="form-text" id="programme_awareness" style="display: inline-block"></p>
                                                <p class="form-text" id="other_awareness" style="display:inline-block; margin-left: 20px"></p>
                                            </div>
                                        </div>
                                        <div class="preferences">
                                            <div class="grid form-grid--1x2 form-grid--1x3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Attendance Choice</label>
                                                    <p class="form-text" id="attendance_choice"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Spouse's Name</label>
                                                    <p class="form-text" id="spouse_name"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Your Expectations from the programme?</label>
                                                <p class="form-text" id="expectation"></p>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Your possible question for the panelists?</label>
                                                <p class="form-text" id="question"></p>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Tab 4 -->
                                <div class="tab" id="tab-4">
                                    <header class="tab-header">
                                        <div class="tab-title">Payment</div>
                                    </header>
                                    <section class="tab-content payment-tab__content">
                                        <h3 class="payment-tab__ticket-type" id="ticket_type">Couple's ticket</h3>
                                        <p class="payment-tab__ticket-amount" id="ticket_amount">NGN 10,000</p>
                                        <svg width="267" height="180" viewBox="0 0 267 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="154" cy="90" r="90" fill="#E5FFFB"/>
                                            <path d="M46.9673 17.5H169.291C176.975 17.5 183.203 23.7287 183.203 31.4121V152.178C183.203 159.862 176.975 166.09 169.291 166.09H46.9673C39.2838 166.09 33.0552 159.862 33.0552 152.178V31.4121C33.0552 23.7287 39.2838 17.5 46.9673 17.5Z" fill="#F2F2F2" stroke="#044904"/>
                                            <path d="M72.6548 19.964C62.8058 19.964 53.3602 23.8765 46.3959 30.8408C39.4316 37.8051 35.519 47.2507 35.519 57.0997V152.179C35.519 153.682 35.8152 155.171 36.3905 156.56C36.9658 157.949 37.8091 159.211 38.8722 160.274C39.9352 161.337 41.1973 162.18 42.5862 162.755C43.9752 163.331 45.4639 163.627 46.9673 163.627H125.037C139.811 163.627 153.979 157.758 164.425 147.312C174.871 136.866 180.739 122.698 180.739 107.925V31.4122C180.739 28.376 179.533 25.4641 177.386 23.3171C175.239 21.1702 172.327 19.964 169.291 19.964H72.6548Z" fill="white"/>
                                            <path d="M126.786 112.68H43.8011C43.3264 112.68 42.8712 112.492 42.5356 112.156C42.2 111.82 42.0115 111.365 42.0115 110.89C42.0115 110.416 42.2 109.961 42.5356 109.625C42.8712 109.289 43.3264 109.101 43.8011 109.101H126.786C127.261 109.101 127.716 109.289 128.051 109.625C128.387 109.961 128.576 110.416 128.576 110.89C128.576 111.365 128.387 111.82 128.051 112.156C127.716 112.492 127.261 112.68 126.786 112.68Z" fill="#E5FFFB"/>
                                            <path d="M126.786 61.6349H1.79268C1.55741 61.6353 1.32437 61.5893 1.10689 61.4995C0.889407 61.4098 0.691762 61.278 0.525256 61.1118C0.358749 60.9456 0.22666 60.7482 0.136531 60.5309C0.0464024 60.3135 0 60.0806 0 59.8453C0 59.61 0.0464024 59.3771 0.136531 59.1598C0.22666 58.9424 0.358749 58.745 0.525256 58.5788C0.691762 58.4126 0.889407 58.2808 1.10689 58.1911C1.32437 58.1013 1.55741 58.0553 1.79268 58.0557H126.786C127.26 58.0566 127.715 58.2455 128.05 58.581C128.385 58.9165 128.573 59.3712 128.573 59.8453C128.573 60.3194 128.385 60.7741 128.05 61.1096C127.715 61.4451 127.26 61.6341 126.786 61.6349Z" fill="#E5FFFB"/>
                                            <path d="M126.789 74.4141H1.7898C1.31535 74.4149 0.860616 74.604 0.525416 74.9398C0.190217 75.2756 0.00195312 75.7306 0.00195312 76.2051C0.00195312 76.6795 0.190217 77.1346 0.525416 77.4704C0.860616 77.8062 1.31535 77.9952 1.7898 77.996H126.789C127.263 77.9952 127.718 77.8062 128.053 77.4704C128.388 77.1346 128.576 76.6795 128.576 76.2051C128.576 75.7306 128.388 75.2756 128.053 74.9398C127.718 74.604 127.263 74.4149 126.789 74.4141Z" fill="#E5FFFB"/>
                                            <path d="M126.786 94.3568H1.79251C1.31788 94.3568 0.862694 94.1683 0.527084 93.8326C0.191473 93.497 0.00292969 93.0419 0.00292969 92.5672C0.00292969 92.0926 0.191473 91.6374 0.527084 91.3018C0.862694 90.9662 1.31788 90.7776 1.79251 90.7776H126.786C127.261 90.7776 127.716 90.9662 128.051 91.3018C128.387 91.6374 128.576 92.0926 128.576 92.5672C128.576 93.0419 128.387 93.497 128.051 93.8326C127.716 94.1683 127.261 94.3568 126.786 94.3568Z" fill="#E5FFFB"/>
                                            <path d="M251.89 45.0859H129.566C121.606 45.0859 115.154 51.5385 115.154 59.498V122.603C115.154 130.563 121.606 137.015 129.566 137.015H251.89C259.85 137.015 266.302 130.563 266.302 122.603V59.498C266.302 51.5385 259.85 45.0859 251.89 45.0859Z" fill="white"/>
                                            <path d="M251.89 137.554H129.566C125.602 137.55 121.802 135.973 118.999 133.17C116.196 130.367 114.619 126.567 114.615 122.603V59.498C114.619 55.5341 116.196 51.7339 118.999 48.931C121.802 46.1281 125.602 44.5515 129.566 44.547H251.89C255.854 44.5515 259.654 46.1282 262.457 48.9311C265.26 51.734 266.836 55.5342 266.841 59.498V122.603C266.836 126.567 265.26 130.367 262.457 133.17C259.654 135.973 255.854 137.55 251.89 137.554ZM129.566 45.6248C125.887 45.6248 122.358 47.0864 119.756 49.6882C117.154 52.2899 115.693 55.8186 115.693 59.498V83.085C115.693 97.2453 121.318 110.826 131.331 120.839C141.344 130.851 154.924 136.477 169.084 136.477H251.89C255.569 136.477 259.098 135.015 261.7 132.413C264.301 129.812 265.763 126.283 265.763 122.604V59.498C265.763 57.6762 265.404 55.8722 264.707 54.189C264.01 52.5058 262.988 50.9764 261.7 49.6882C260.411 48.3999 258.882 47.378 257.199 46.6808C255.516 45.9836 253.712 45.6248 251.89 45.6248L129.566 45.6248Z" fill="#044904"/>
                                            <path d="M161.897 112.067H133.336C132.294 112.067 131.45 112.912 131.45 113.954C131.45 114.995 132.294 115.84 133.336 115.84H161.897C162.939 115.84 163.783 114.995 163.783 113.954C163.783 112.912 162.939 112.067 161.897 112.067Z" fill="#E5FFFB"/>
                                            <path d="M248.119 106.948H228.181C227.139 106.948 226.294 107.792 226.294 108.834V119.073C226.294 120.115 227.139 120.959 228.181 120.959H248.119C249.161 120.959 250.006 120.115 250.006 119.073V108.834C250.006 107.792 249.161 106.948 248.119 106.948Z" fill="#B6FBEA"/>
                                            <path d="M141.15 80.5422C146.507 80.5422 150.85 76.1993 150.85 70.8422C150.85 65.485 146.507 61.1422 141.15 61.1422C135.793 61.1422 131.45 65.485 131.45 70.8422C131.45 76.1993 135.793 80.5422 141.15 80.5422Z" fill="#B6FBEA"/>
                                            <path d="M167.15 80.5421C172.507 80.5421 176.85 76.1993 176.85 70.8421C176.85 65.4849 172.507 61.1421 167.15 61.1421C161.793 61.1421 157.45 65.4849 157.45 70.8421C157.45 76.1993 161.793 80.5421 167.15 80.5421Z" fill="#B6FBEA"/>
                                            <path d="M154.164 136.309L128.902 135.77C125.759 135.766 122.747 134.515 120.525 132.293C118.304 130.07 117.054 127.057 117.051 123.915L115.973 97.5026C119.075 119.036 130.995 132.695 154.164 136.309Z" fill="#E5FFFB"/>
                                        </svg>
                                        <button type="submit" class="btn btn--secondary payment-tab__button">Proceed to Pay</button>
                                        <p class="payment-tab__tagline">Payment is facilitated by Paystack</p>
                                    </section>
                                </div>

                                <footer class="tab-footer">
                                    <button class="btn tab-footer--back btn--default btn--hide" id="backButton">back</button>
                                    <button class="btn btn--primary btn--block" id="continueButton">Continue</button>
                                </footer>
                            </form>
                        <!-- </div> -->
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
                            document.querySelector('#ticket_amount').innerText = 'NGN 10,000';
                            document.querySelector('#ticket_type').innerText = 'Couple\'s Ticket';
                            document.querySelector('#paystack_amount').value = 10000 * 100;
                            document.querySelector('#paymentcode').value = "COUPLE's-TICKET";
                        }else {
                            document.querySelector('#ticket_amount').innerText = 'NGN 5,000';
                            document.querySelector('#ticket_type').innerText = 'Single\'s Ticket';
                            document.querySelector('#paystack_amount').value = 5000 * 100;
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
