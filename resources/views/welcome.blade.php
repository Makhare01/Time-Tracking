<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Time Tracking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <script src="{{ asset('js/main.js') }}" defer></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}

            body {
                font-family: 'Nunito';
            }
            .nav-div {
                position: absolute;
            }
            .modal-designe {
                border-radius: 10px !important;
                background-color: #E6F2FD !important;
                /* max-width: 400px !important; */
            }
            .myModal {
                transition: opacity 0.25s ease;
            }
            body.modal-active {
                overflow-x: hidden;
                overflow-y: visible !important;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="nav-div top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700">
                            <!-- <button type="button" class="btn btn-outline-primary">Login</button> -->
                            <button style="font-family: TBC Contractica CAPS regular; padding-top: 10px; padding-bottom: 4px;" type="button" class="focus:outline-none text-purple-600 text-sm px-5 rounded-md hover:bg-purple-100">
                                <!-- Login -->
                                შესვლა
                            </button>
                        </a>
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <!-- <div class="relative inline-block text-left">
                            <div>
                                <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    ქართული
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </button>
                            </div>
                           
                            <div id="dropdown-menu" class="transition ease-out duration-100 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none opacity-0 pointer-events-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    ქართული
                                </a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    ინგლისური
                                </a>
                                </div>
                            </div>
                        </div> -->
                        

                        @if (Route::has('register'))
                            <!-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Register
                            </button>  -->
                            <!-- <button type="button" class="focus:outline-none text-purple-600 text-sm py-2.5 px-5 rounded-md hover:bg-purple-100">Register</button> -->
                        @endif

                    @endauth
                </div>
            @endif

            <div class="justify-center sm:items-center sm:pt-0 mt-5">
                <!-- <img src="/img/time.svg" alt="Time tracking icon" class="mb-5"> -->
                <div style="display: flex;">
                    <div style="width: 50%; margin-top: 100px;">
                        <h1 class="mb-5" style="color: #8BA2FF; letter-spacing: 10px; font-size: 44px;">TIME TRACKING</h1>
                        <!-- <p style="color: #8BA2FF; letter-spacing: 4px; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: bold; font-style: italic;">CONTROL THE TIME FOR <span style="color: #FFDE91;"><i>BETTER</i></span> RESULTS</p> -->
                        <!-- <p style="color: #8BA2FF; letter-spacing: 4px; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: bold; font-style: italic;">TIME MANAGEMENG FOR <span style="color: #FFDE91;"><i>BETTER</i></span> RESULTS</p> -->
                        <p style="color: #8BA2FF; letter-spacing: 4px; font-family: TBC Contractica CAPS regular; font-size: 18px; font-weight: bold; font-style: italic;">დროის მენეჯმენტი <span style="color: #FFDE91;"><i>უკეთესი</i></span> შედეგებისათვის</p>
                        <!-- <button class="py-2 px-4 my-5 text-red-600 font-semibold border border-red-600 rounded get-started-button">Get started</button> -->
                        <button style="font-family: TBC Contractica CAPS regular;" type="button" class="focus:outline-none text-white text-sm font-bold pt-3 pb-2 px-4 my-5 rounded-md bg-gray-900 hover:bg-gray-800 hover:shadow-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <!-- Get started -->
                            დაწყება
                        </button>
                    </div>
                    <img src="/img/clip-992.png" style="float: left;" alt="Time managment illustration" width="650px" class="image-header">
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS regular; font-size: 14pt; font-weight: bold;">
                                    <!-- Register -->
                                    რეგისტრაცია
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="/img/flame-1208.png" alt="registration illustration" style="height: 300px; margin: auto;">
                                <div style="display: flex;  width: 100%;">
                                    <a href="{{ route('register.company') }}" class="text-sm text-gray-700 w-1/2">
                                        <!-- <button type="button" class="btn btn-outline-primary w-full">Register A Company</button> -->
                                        <button type="button" class="focus:outline-none text-blue-600 text-sm py-2.5 px-4 mr-2 rounded-md border border-blue-600 hover:bg-blue-50" style="font-family: TBC Contractica CAPS regular; width: calc(100% - 0.5rem)">
                                            <!-- Register A Company -->
                                            კომპანიის რეგისტრაცია
                                        </button>
                                    </a>
                                    <a href="{{ route('register') }}" class="text-sm text-gray-700 w-1/2">
                                        <!-- <button type="button" class="btn btn-outline-primary w-full">Register A User</button> -->
                                        <button type="button" class="focus:outline-none text-blue-600 text-sm py-2.5 ml-2 px-3 rounded-md border border-blue-600 hover:bg-blue-50" style="font-family: TBC Contractica CAPS regular; width: calc(100% - 0.5rem)">
                                            <!-- Register A User -->
                                            მომხმარებლის რეგისტრაცია
                                        </button>
                                    </a>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <p class="mr-4" style="font-family: TBC Contractica CAPS regular; font-size: 12pt; font-weight: bold;">
                                    <!-- Already registered? -->
                                    უკვე რეგისტრირებული ხარ?
                                </p>
                                <a href="{{ route('login') }}">
                                    <button style="font-family: TBC Contractica CAPS regular;" type="button" class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md border border-green-600 hover:bg-green-50">
                                        <!-- Login -->
                                        შესვლა
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    </body>
</html>
