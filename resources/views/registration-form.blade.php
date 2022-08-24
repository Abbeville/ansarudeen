<div class="card registration-form">
        <ul class="progress-steps">
            <li class="step step--active">
                <div class="icon-container">
                    <svg width="12" height="12" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.99999 1.99999C6.73332 1.99999 7.33332 2.59999 7.33332 3.33332C7.33332 4.06666 6.73332 4.66666 5.99999 4.66666C5.26666 4.66666 4.66666 4.06666 4.66666 3.33332C4.66666 2.59999 5.26666 1.99999 5.99999 1.99999ZM5.99999 8.66666C7.79999 8.66666 9.86666 9.52666 9.99999 9.99999H1.99999C2.15332 9.51999 4.20666 8.66666 5.99999 8.66666ZM5.99999 0.666656C4.52666 0.666656 3.33332 1.85999 3.33332 3.33332C3.33332 4.80666 4.52666 5.99999 5.99999 5.99999C7.47332 5.99999 8.66666 4.80666 8.66666 3.33332C8.66666 1.85999 7.47332 0.666656 5.99999 0.666656ZM5.99999 8.66666C4.21999 8.66666 0.666656 9.55999 0.666656 11.3333V12.6667H11.3333V11.3333C11.3333 9.55999 7.77999 8.66666 5.99999 8.66666Z" fill="#333333"/>
                    </svg>
                </div>
            </li>
            <li class="step">
                <div class="icon-container">
                    <svg width="12" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.99998 8C3.73331 8 4.33331 8.6 4.33331 9.33333C4.33331 10.0667 3.73331 10.6667 2.99998 10.6667C2.26665 10.6667 1.66665 10.0667 1.66665 9.33333C1.66665 8.6 2.26665 8 2.99998 8ZM2.99998 6.66667C1.53331 6.66667 0.333313 7.86667 0.333313 9.33333C0.333313 10.8 1.53331 12 2.99998 12C4.46665 12 5.66665 10.8 5.66665 9.33333C5.66665 7.86667 4.46665 6.66667 2.99998 6.66667ZM6.99998 1.33333C7.73331 1.33333 8.33331 1.93333 8.33331 2.66667C8.33331 3.4 7.73331 4 6.99998 4C6.26665 4 5.66665 3.4 5.66665 2.66667C5.66665 1.93333 6.26665 1.33333 6.99998 1.33333ZM6.99998 0C5.53331 0 4.33331 1.2 4.33331 2.66667C4.33331 4.13333 5.53331 5.33333 6.99998 5.33333C8.46665 5.33333 9.66665 4.13333 9.66665 2.66667C9.66665 1.2 8.46665 0 6.99998 0ZM11 8C11.7333 8 12.3333 8.6 12.3333 9.33333C12.3333 10.0667 11.7333 10.6667 11 10.6667C10.2666 10.6667 9.66665 10.0667 9.66665 9.33333C9.66665 8.6 10.2666 8 11 8ZM11 6.66667C9.53331 6.66667 8.33331 7.86667 8.33331 9.33333C8.33331 10.8 9.53331 12 11 12C12.4666 12 13.6666 10.8 13.6666 9.33333C13.6666 7.86667 12.4666 6.66667 11 6.66667Z" fill="#333333"/>
                    </svg>
                </div>
            </li>
            <li class="step">
                <div class="icon-container">
                    <svg width="12" height="12" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.99998 7.77999L1.21998 4.99999L0.273315 5.93999L3.99998 9.66665L12 1.66665L11.06 0.726654L3.99998 7.77999Z" fill="#333333"/>
                    </svg>
                </div>
            </li>
            <li class="step">
                <div class="icon-container">
                    <svg width="12" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6667 7.33332V1.99999C12.6667 1.26666 12.0667 0.666656 11.3334 0.666656H2.00008C1.26675 0.666656 0.666748 1.26666 0.666748 1.99999V7.33332C0.666748 8.06666 1.26675 8.66666 2.00008 8.66666H11.3334C12.0667 8.66666 12.6667 8.06666 12.6667 7.33332ZM11.3334 7.33332H2.00008V1.99999H11.3334V7.33332ZM6.66675 2.66666C5.56008 2.66666 4.66675 3.55999 4.66675 4.66666C4.66675 5.77332 5.56008 6.66666 6.66675 6.66666C7.77342 6.66666 8.66675 5.77332 8.66675 4.66666C8.66675 3.55999 7.77342 2.66666 6.66675 2.66666ZM15.3334 2.66666V9.99999C15.3334 10.7333 14.7334 11.3333 14.0001 11.3333H2.66675C2.66675 10.6667 2.66675 10.7333 2.66675 9.99999H14.0001V2.66666C14.7334 2.66666 14.6667 2.66666 15.3334 2.66666Z" fill="#333333"/>
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
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1.425C6.87 1.425 7.575 2.13 7.575 3C7.575 3.87 6.87 4.575 6 4.575C5.13 4.575 4.425 3.87 4.425 3C4.425 2.13 5.13 1.425 6 1.425ZM6 8.175C8.2275 8.175 10.575 9.27 10.575 9.75V10.575H1.425V9.75C1.425 9.27 3.7725 8.175 6 8.175ZM6 0C4.3425 0 3 1.3425 3 3C3 4.6575 4.3425 6 6 6C7.6575 6 9 4.6575 9 3C9 1.3425 7.6575 0 6 0ZM6 8.175C3.9975 8.175 0 9.18 0 11.175V13.425H12V11.175C12 9.18 8.0025 8.175 6 8.175Z" fill="#CFCEC9"/>
                                </svg>
                                <input type="text" class="input form-error" name="first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Last Name</label>
                            <div class="input-group">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1.425C6.87 1.425 7.575 2.13 7.575 3C7.575 3.87 6.87 4.575 6 4.575C5.13 4.575 4.425 3.87 4.425 3C4.425 2.13 5.13 1.425 6 1.425ZM6 8.175C8.2275 8.175 10.575 9.27 10.575 9.75V10.575H1.425V9.75C1.425 9.27 3.7725 8.175 6 8.175ZM6 0C4.3425 0 3 1.3425 3 3C3 4.6575 4.3425 6 6 6C7.6575 6 9 4.6575 9 3C9 1.3425 7.6575 0 6 0ZM6 8.175C3.9975 8.175 0 9.18 0 11.175V13.425H12V11.175C12 9.18 8.0025 8.175 6 8.175Z" fill="#CFCEC9"/>
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
                                <input type="radio" id="male" name="gender" value="male" checked>
                                <input type="radio" id="female" name="gender" value="female">
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
