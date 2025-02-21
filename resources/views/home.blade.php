@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/homestyle.css') }}">
    <section>
        <!-- Intro -->
        <div id="intro" class="bg-image vh-100 d-flex justify-content-center align-items-center"
            style="
                                                                    background-image: url('{{ asset('assets/images/firstImage.jpg') }}');">
            <div class="mask" style="background-color: rgba(250, 182, 162, 0.15);">
                <h1 id="typingText"></h1>
            </div>
        </div>
    </section>

    <div class="mx-4 mt-5 row row-cols-lg-3 row-cols-md-2 row-cols-1 text-center justify-content-center px-xl-6 aos-init aos-animate"
        data-aos="fade-up">
        <div class="col my-3">
            <div class="card border-hover-primary hover-scale">
                <div class="card-body hover-shadow">
                    <div class="text-primary mb-5">
                        <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                    fill="currentColor" opacity="0.3"></path>
                                <path
                                    d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                    fill="currentColor"></path>
                                <rect fill="currentColor" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"></rect>
                                <rect fill="currentColor" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"></rect>
                                <rect fill="currentColor" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"></rect>
                                <rect fill="currentColor" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"></rect>
                                <rect fill="currentColor" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"></rect>
                                <rect fill="currentColor" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </div>
                    <h6 class="font-weight-bold mb-3">Professional Service</h6>
                    <p class="text-muted mb-0">Done By Experts</p>
                </div>
            </div>
        </div>
        <div class="col my-3">
            <div class="card border-hover-primary hover-scale">
                <div class="card-body hover-shadow">
                    <div class="text-primary mb-5">
                        <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                    fill="currentColor" opacity="0.3"></path>
                            </g>
                        </svg>
                    </div>
                    <h6 class="font-weight-bold mb-3">24x7 Help Support</h6>
                    <p class="text-muted mb-0">Take our help anytime</p>
                </div>
            </div>
        </div>
        {{-- <div class="col my-3">
        <div class="card border-hover-primary hover-scale">
            <div class="card-body hover-shadow">
                <div class="text-primary mb-5">
                    <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z"
                                fill="currentColor"></path>
                            <path
                                d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z"
                                fill="currentColor" opacity="0.3"></path>
                            <path
                                d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                fill="currentColor" fill-rule="nonzero"
                                transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) ">
                            </path>
                        </g>
                    </svg>
                </div>
                <h6 class="font-weight-bold mb-3">Search Engine Marketing</h6>
                <p class="text-muted mb-0">Embed holistics charts directly to your application</p>
            </div>
        </div>
    </div> --}}
        {{-- <div class="col my-3">
        <div class="card border-hover-primary hover-scale">
            <div class="card-body hover-shadow">
                <div class="text-primary mb-5">
                    <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                fill="currentColor" opacity="0.3"></path>
                            <path
                                d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                </div>
                <h6 class="font-weight-bold mb-3">Search Engine Optimization</h6>
                <p class="text-muted mb-0">Embed holistics charts directly to your application</p>
            </div>
        </div>
    </div> --}}
        <div class="col my-3">
            <div class="card border-hover-primary hover-scale">
                <div class="card-body hover-shadow">
                    <div class="text-primary mb-5">
                        <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M3.73851648,19 L8.5,19 C8.77614237,19 9,18.7761424 9,18.5 L9,6.5962912 C9,6.32014883 8.77614237,6.0962912 8.5,6.0962912 C8.29554771,6.0962912 8.11169333,6.22076667 8.03576165,6.41059586 L3.27427814,18.3143047 C3.17172143,18.5706964 3.29642938,18.8616816 3.55282114,18.9642383 C3.61188128,18.9878624 3.67490677,19 3.73851648,19 Z"
                                    fill="currentColor" opacity="0.3"></path>
                                <path
                                    d="M15.7385165,19 L20.5,19 C20.7761424,19 21,18.7761424 21,18.5 L21,6.5962912 C21,6.32014883 20.7761424,6.0962912 20.5,6.0962912 C20.2955477,6.0962912 20.1116933,6.22076667 20.0357617,6.41059586 L15.2742781,18.3143047 C15.1717214,18.5706964 15.2964294,18.8616816 15.5528211,18.9642383 C15.6118813,18.9878624 15.6749068,19 15.7385165,19 Z"
                                    fill="currentColor"
                                    transform="translate(18.000000, 12.500000) scale(-1, 1) translate(-18.000000, -12.500000) ">
                                </path>
                                <rect fill="currentColor" opacity="0.3" x="11" y="2" width="2" height="20" rx="1"></rect>
                            </g>
                        </svg>
                    </div>
                    <h6 class="font-weight-bold mb-3">Take Your Service Online</h6>
                    <p class="text-muted mb-0">Take advantage of our huge customer base </p>
                </div>
            </div>
        </div>
        <div class="col my-3">
            <div class="card border-hover-primary hover-scale">
                <div class="card-body hover-shadow">
                    <div class="text-primary mb-5">
                        <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="currentColor" x="4" y="16" width="4" height="4" rx="1"></rect>
                                <rect fill="currentColor" x="4" y="10" width="4" height="4" rx="1"></rect>
                                <rect fill="currentColor" x="10" y="16" width="4" height="4" rx="1"></rect>
                                <rect fill="currentColor" opacity="0.3" x="10" y="10" width="4" height="4" rx="1"></rect>
                                <rect fill="currentColor" x="4" y="4" width="4" height="4" rx="1"></rect>
                                <rect fill="currentColor" x="16" y="16" width="4" height="4" rx="1"></rect>
                            </g>
                        </svg>
                    </div>
                    <h6 class="font-weight-bold mb-3">Preffered By Thousands</h6>
                    <p class="text-muted mb-0">Popolar to provide whatever service that you want</p>
                </div>
            </div>
        </div>
        <div class="col my-3">
            <div class="card border-hover-primary hover-scale">
                <div class="card-body hover-shadow">
                    <div class="text-primary mb-5">
                        <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                    fill="currentColor" opacity="0.3"></path>
                                <path
                                    d="M12.6706167,18.7881514 L15.9697449,13.8394592 C16.1995092,13.4948127 16.1063788,13.0291607 15.7617323,12.7993963 C15.6385316,12.7172626 15.4937759,12.673434 15.3457071,12.673434 L12.659208,12.673434 L12.659208,9.69999981 C12.659208,9.28578625 12.3234215,8.94999981 11.909208,8.94999981 C11.6584431,8.94999981 11.4242696,9.07532566 11.2851703,9.28397466 L7.98604212,14.2326669 C7.75627777,14.5773134 7.84940818,15.0429654 8.19405469,15.2727297 C8.31725533,15.3548635 8.4620111,15.398692 8.61007984,15.398692 L11.296579,15.398692 L11.296579,18.3721263 C11.296579,18.7863398 11.6323654,19.1221263 12.046579,19.1221263 C12.2973439,19.1221263 12.5315174,18.9968004 12.6706167,18.7881514 Z"
                                    fill="currentColor" opacity="0.3"></path>
                            </g>
                        </svg>
                    </div>
                    <h6 class="font-weight-bold mb-3">Express Service</h6>
                    <p class="text-muted mb-0">Service In Time</p>
                </div>
            </div>
        </div>
        {{-- <div class="col my-3">
        <div class="card border-hover-primary hover-scale">
            <div class="card-body hover-shadow">
                <div class="text-primary mb-5">
                    <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                fill="currentColor"></path>
                            <path
                                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                fill="currentColor" opacity="0.3"></path>
                        </g>
                    </svg>
                </div>
                <h6 class="font-weight-bold mb-3">Task management</h6>
                <p class="text-muted mb-0">Embed holistics charts directly to your application</p>
            </div>
        </div>
    </div> --}}
        <div class="col mb-0 mt-3 mb-lg-3">
            <div class="card border-hover-primary hover-scale">
                <div class="card-body hover-shadow">
                    <div class="text-primary mb-5">
                        <svg width="60" height="60" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                    fill="currentColor" opacity="0.3"></path>
                                <path
                                    d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z"
                                    fill="currentColor"></path>
                            </g>
                        </svg>
                    </div>
                    <h6 class="font-weight-bold mb-3">Data Privacy</h6>
                    <p class="text-muted mb-0">Embed holistics charts directly to your application</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>



    @if (Auth::guest())
        <div class="loginSection my-3 d-flex justify-content-center align-items-cetner">
            <div id="loginFormContainer" class="loginFormContainer m-0 row">
                <div id="loginHeading" class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                    <h1>Login To Your Account</h1>
                    <div>
                        Or
                        <button class="buttonRounded-outlined p-2 px-4">Sign Up</button>
                    </div>
                </div>
                <div id="loginRight" class="col-md-6 p-4">
                    <form action="{{ route('login') }}" method="POST" id="login-form"
                        class="m-2 d-flex justify-content-center align-items-center flex-column">
                        @csrf
                        <div class="login-form-group form-floating">
                            <input id="email" type="email" class="w-100 form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email Id"
                                @error('email') autofocus @enderror>
                            <label for="email">Email</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-form-group form-floating my-4">
                            <input id="password" type="password"
                                class="w-100 form-control @error('password') is-invalid @enderror" name="password"
                                value="{{ old('password') }}" autocomplete="password" placeholder="Enter Password"
                                @error('email') autofocus @enderror>
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <button type="submit" class="buttonRounded p-2 px-4">
                            Login
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
        {!! JsValidator::formRequest('App\Http\Requests\UserLoginRequest', '#login-form') !!}
    @else
        <div id="searchSection" class="loginSection my-3 d-flex justify-content-center align-items-cetner">
            <div id="loginFormContainer" class="loginFormContainer m-0 row">
                <div id="loginHeading" class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                    <h1 id="category-typing-text" class="d-inline-block">1</h1>
                    <div>
                        Services At Your Fingertips
                    </div>
                </div>
                <div id="loginRight" class="col-md-6 p-4 d-flex justify-content-center align-items-center">
                    <form action="{{ route('search') }}" method="get" id="login-form"
                        class="m-2 d-flex justify-content-center align-items-center flex-column">
                        <div class="login-form-group form-floating d-flex justify-content-center align-items-center">
                            <input id="search" type="search" class="w-100 form-control" name="search_text"
                                value="{{ old('search') }}" autocomplete="search" placeholder="search Id">
                            <label for="search">Tell Us what you want.</label>
                            <button type="submit" class="buttonRounded m-1 p-2 px-4">
                                Search
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
        {!! JsValidator::formRequest('App\Http\Requests\UserLoginRequest', '#login-form') !!}
        <script>
            let stringList = [


                @foreach ($service_categories as $category)
                    "{{ $category->name }}",
                @endforeach
            ];
            let stringListLength = stringList.length;
            let selectedString = 0

            let currentString = stringList[0];
            let currentLength = currentString.length;
            let printedCharacters = 0;
            let typing = true
            let elementId = "category-typing-text"

            function update() {
                if ((printedCharacters <= currentLength) && (typing)) {
                    document.getElementById(elementId).innerHTML = currentString.substring(0, printedCharacters)
                    printedCharacters += 1;
                } else if ((printedCharacters > currentLength) && (typing)) {
                    typing = false;
                } else if ((printedCharacters >= 0) && (!typing)) {
                    document.getElementById(elementId).innerHTML = currentString.substring(0, printedCharacters)
                    printedCharacters -= 1;

                } else {
                    selectedString = (selectedString + 1) % stringListLength;
                    currentString = stringList[selectedString];
                    currentLength = currentString.length;
                    printedCharacters = 0;
                    typing = true;
                }
            }

            setInterval(update, 150);
        </script>
    @endif

    @unlessorganization_member()
    <div id="takeBusinessOnlineSection" class="loginSection d-flex justify-content-center align-items-cetner">
        <div id="loginFormContainer" class="loginFormContainer m-0 row"
            onclick="document.location='{{ route('organizations.create') }}'">
            <div id="takeBusinessOnline" class="col-md-12 d-flex justify-content-center align-items-center flex-column">
                <h1 id="business-heading" class="d-inline-block d-flex justify-content-center align-items-center">
                    Want to Take Your Service Business Online <span id="questionMark">?</span>
                </h1>

            </div>
        </div>
    </div>
    @endorganization_member

    <script>
        let stringList12 = ["All Services At Your Doorstep", "Fast", "At Doorstep Service", "Now in Your City"];
        let stringListLength12 = stringList12.length;
        let selectedString12 = 0

        let currentString12 = stringList12[0];
        let currentLength12 = currentString12.length;
        let printedCharacters12 = 0;
        let typing12 = true
        let elementId12 = "typingText"

        function update() {
            if ((printedCharacters12 <= currentLength12) && (typing12)) {
                document.getElementById(elementId12).innerHTML = currentString12.substring(0, printedCharacters12)
                printedCharacters12 += 1;
            } else if ((printedCharacters12 > currentLength12) && (typing12)) {
                typing12 = false;
            } else if ((printedCharacters12 >= 0) && (!typing12)) {
                document.getElementById(elementId12).innerHTML = currentString12.substring(0, printedCharacters12)
                printedCharacters12 -= 1;

            } else {
                selectedString12 = (selectedString12 + 1) % stringListLength12;
                currentString12 = stringList12[selectedString12];
                currentLength12 = currentString12.length;
                printedCharacters12 = 0;
                typing12 = true;
            }
        }

        setInterval(update, 150);
    </script>

    
@endsection
