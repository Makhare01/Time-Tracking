<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard For Company') }}
        </h2>
    </x-slot> -->
    <!-- max-w-7xl -->
    <div class="mt-8 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">
            <p style="font-family: 'Nunito'; font-size: 18pt; font-weight: bold; margin: 0px !important;">Work</p>
        </div>
        <div class="w-2/3 sm:px-6 lg:px-8">
            <button class="float-right bg-green-400 px-3 py-2 font-semibold tracking-wider text-white rounded-full hover:bg-green-500" data-bs-toggle="modal" data-bs-target="#startWorkingModal" style="font-family: 'Nunito'; font-size: 12pt;">Start working</button>
        </div>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary">
        Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="startWorkingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Nunito'; font-size: 14pt; font-weight: bold;">Start Working</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="/img/clip-1674.png" alt="start working illustration" style="width: 300px; margin: auto;">
                        <!-- <div class="w-full dropdown inline-block relative">
                            <button class="w-full bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                <span style="text-align: center; margin: auto;">Choose a project 🠋</span>
                            </button>
                            <ul class="w-full dropdown-content absolute hidden text-gray-700 pt-1">
                                <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">React Project</a></li>
                                <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Laravel Project</a></li>
                                <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Conference</a></li>
                                <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Vue 3 Project</a></li>
                                <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Social Network</a></li>
                            </ul>
                        </div> -->
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Choose a project</option>
                            <option value="React Project">React Project</option>
                            <option value="Laravel Project">Laravel Project</option>
                            <option value="Conference">Conference</option>
                            <option value="Vue 3 Project">Vue 3 Project</option>
                            <option value="Social Network">Social Network</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info">Start</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 pb-12 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="shadow-lg mb-3" style="width: 120px; height: 120px; position: relative; border: solid 3px lightGrey; border-radius: 50%; margin: auto;">
                        <div class="bg-green-400" style="width: 15px; height: 15px; border: solid 2px white; border-radius: 50%; position: absolute; top: 8px; left: 8px;"></div>
                        <img src="/img/icons/avatar.png" alt="user avatar icon" style="border-radius: 50%;">
                    </div>
                    <p style="font-family: 'Nunito'; font-size: 14pt; font-weight: bold; margin: 0px !important; text-align: center;">  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </p>
                    <p style="font-family: 'Nunito'; font-size: 10pt; margin: 0px !important; text-align: center; font-style: italic; color: grey;">  {{ Auth::user()->email }} </p>

                    <div class="mt-14" style="width: 100%;">
                        <div class="my-3 px-3 message-div" style="width: 180px; border-radius: 20px; display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2 mr-5 message-icon" fill="none" viewBox="0 0 24 24" stroke="#818CF8">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                            <p class="py-2 message-text" style="font-family: 'Nunito'; font-size: 14pt; font-weight: bold; margin: 0px !important; line-height: 1.5rem;">messages</p>
                        </div>

                        <div class="my-3 px-3 message-div" style="width: 180px; border-radius: 20px; display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2 mr-5 message-icon" fill="none" viewBox="0 0 24 24" stroke="#818CF8">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <p class="py-2 message-text" style="font-family: 'Nunito'; font-size: 14pt; font-weight: bold; margin: 0px !important; line-height: 1.5rem;">teammates</p>
                        </div>

                        <div class="my-3 px-3 message-div" style="width: 180px; border-radius: 20px; display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2 mr-5 message-icon" fill="none" viewBox="0 0 24 24" stroke="#818CF8">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <p class="py-2 message-text" style="font-family: 'Nunito'; font-size: 14pt; font-weight: bold; margin: 0px !important; line-height: 1.5rem;">notifications</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- <p>ID: <b> {{ Auth::user()->id }} </b> </p>
                    <p>Email: <b> {{ Auth::user()->email }} ksdhsdfiwyrnwicr73r847nwcx8ctfng28fg8cx48hfx9482xisahfahjfhadsirmy498ry293 </b> </p>
                    <p>Role: <b> {{ Auth::user()->role_id }} </b> </p> -->

                    <p style="font-family: 'Nunito'; font-size: 18pt; font-weight: bold;">Projects</p>

                    <div class="px-2 mt-3" style="width: 100%; height: 200px; display: flex;">
                        <div class="border-1 border-green-600 my-3 mr-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer" style="width: 130px; height: 130px; border-radius: 10px;">
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 22pt; font-weight: bold; text-align: center;">28</p>
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: grey; font-style: italic;">React Project</p>
                            <p style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: #34D399; margin-top: 20px;">Active</p>
                        </div>

                        <div class="my-3 mx-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer" style="width: 130px; height: 130px; border-radius: 10px;">
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 22pt; font-weight: bold; text-align: center;">16</p>
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: grey; font-style: italic;">Laravel Project</p>
                            <p style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: #EF4444; margin-top: 20px;">Finished</p>
                        </div>

                        <div class="my-3 mx-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer" style="width: 130px; height: 130px; border-radius: 10px;">
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 22pt; font-weight: bold; text-align: center;">8</p>
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: grey; font-style: italic;">Conference</p>
                            <p style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: #6B7280; margin-top: 20px;">Archived</p>
                        </div>

                        <div class="my-3 mx-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer" style="width: 130px; height: 130px; border-radius: 10px;">
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 22pt; font-weight: bold; text-align: center;">20</p>
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: grey; font-style: italic;">Vue 3 Project</p>
                            <p style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: #34D399; margin-top: 20px;">Active</p>
                        </div>

                        <div class="my-3 ml-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer" style="width: 130px; height: 130px; border-radius: 10px;">
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 22pt; font-weight: bold; text-align: center;">38</p>
                            <p class="my-2" style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: grey; font-style: italic;">Social Network</p>
                            <p style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold; text-align: center; color: #6366F1; margin-top: 20px;">Completed</p>
                        </div>
                    </div>

                    <table class="min-w-max w-full table-auto border border-gray-200">
                        <thead>
                            <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                <th class="py-3 px-6 text-left border border-gray-200">Date</th>
                                <th class="py-3 px-6 text-left border border-gray-200">Start</th>
                                <th class="py-3 px-6 text-center border border-gray-200">End</th>
                                <th class="py-3 px-6 text-center border border-gray-200">Total Time</th>
                                <th class="py-3 px-6 text-center border border-gray-200">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            2021-05-27
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left border border-gray-200">
                                    <div class="flex items-center font-medium">
                                        <!-- <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div> -->
                                        <span> 
                                            12:30:10
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex items-center justify-center font-medium">
                                        <!-- <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">Times</span> -->
                                        16:15:42
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <span class="font-medium">
                                        3.5
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            2021-05-28
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left border border-gray-200">
                                    <div class="flex items-center font-medium">
                                        <!-- <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div> -->
                                        <span> 
                                            09:00:10
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex items-center justify-center font-medium">
                                        <!-- <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">Times</span> -->
                                        16:00:42
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <span class="font-medium">
                                        7
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            2021-05-29
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left border border-gray-200">
                                    <div class="flex items-center font-medium">
                                        <!-- <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div> -->
                                        <span> 
                                            10:00:10
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex items-center justify-center font-medium">
                                        <!-- <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">Times</span> -->
                                        18:00:42
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <span class="font-medium">
                                        8
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            2021-05-30
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left border border-gray-200">
                                    <div class="flex items-center font-medium">
                                        <!-- <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div> -->
                                        <span> 
                                            13:30:10
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex items-center justify-center font-medium">
                                        <!-- <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">Times</span> -->
                                        19:30:42
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <span class="font-medium">
                                        6
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            2021-05-31
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left border border-gray-200">
                                    <div class="flex items-center font-medium">
                                        <!-- <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div> -->
                                        <span> 
                                            11:50:10
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex items-center justify-center font-medium">
                                        <!-- <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">Times</span> -->
                                        16:10:42
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <span class="font-medium">
                                        4
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            2021-06-01
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left border border-gray-200">
                                    <div class="flex items-center font-medium">
                                        <!-- <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div> -->
                                        <span> 
                                            12:00:10
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex items-center justify-center font-medium">
                                        <!-- <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">Times</span> -->
                                        18:00:42
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <span class="font-medium">
                                        6
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center border border-gray-200">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>