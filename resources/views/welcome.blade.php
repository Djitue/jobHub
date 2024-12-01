<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>JobHub | Find Best Jobs</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="pinterest" content="nopin" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <!-- Fav Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="#" />
    </head>
    <body data-instant-intensity="mousedown">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
                <div class="container">                    
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth('web')
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">

                                    Dashboard
                                </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        
                                            Register
                                        </a>
                                    @endif
                            @endauth

                            @auth('admin')
                                <a
                                    href="{{ url('/admin/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Admin Dashboard
                                </a>
                                @else
                                <a
                                    href="{{ route('admin.login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Admin Login
                                </a>

                                @if (Route::has('admin.register'))
                                    <a
                                        href="{{ route('admin.register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Admin Register
                                    </a>
                                @endif
                            @endauth

                            @auth('employer')
                                <a
                                    href="{{ url('/employer/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Employer Dashboard
                                </a>
                                @else
                                <a
                                    href="{{ route('employer.login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Employer Login
                                </a>

                                @if (Route::has('employer.register'))
                                    <a
                                        href="{{ route('employer.register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Employer Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </nav>
        </header>

        <section class="section-0 d-flex bg-image-style dark align-items-center" style="background-image: url('{{ asset('assets/images/banner5.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <h1>Find your dream job</h1>
                        <p>Thounsands of jobs available.</p>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section-1 py-5 "> 
            <div class="container">
                <div class="card border-0 shadow p-5">
                    <div class="row">
                        <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Keywords">
                        </div>
                        <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Location">
                        </div>
                        <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                            <select name="category" id="category" class="form-control">
                                <option value="">Select a Category</option>
                                <option value="">Engineering</option>
                                <option value="">Accountant</option>
                                <option value="">Information Technology</option>
                                <option value="">Fashion designing</option>
                            </select>
                        </div>
                        
                        <div class=" col-md-3 mb-xs-3 mb-sm-3 mb-lg-0">
                            <div class="d-grid gap-2">
                                <a href="jobs.html" class="btn btn-primary btn-block">Search</a>
                            </div>
                            
                        </div>
                    </div>            
                </div>
            </div>
        </section>

        <section class="section-2 bg-2 py-5">
            <div class="container">
                <h2>Popular Categories</h2>
                <div class="row pt-5">
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Design &amp; Creative</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Finance</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Banking</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Data Science</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Marketing</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">Web Development</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <a href="jobs.html"><h4 class="pb-2">AI and ML</h4></a>
                            <p class="mb-0"> <span>50</span> Available position</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                        
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </body>
</html>
