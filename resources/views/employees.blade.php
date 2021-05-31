<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard For Company') }}
        </h2>
    </x-slot> -->

    <div class="py-2 mt-4 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">
            <p style="font-family: 'Nunito'; font-size: 18pt; font-weight: bold; margin: 0px !important;">
                <!-- employees -->
                თანამშრომლები
            </p>
        </div>
        <div class="w-2/3 sm:px-6 lg:px-8">
            <button class="float-right bg-green-400 px-3 py-2 font-semibold tracking-wider text-white rounded-full hover:bg-green-500" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-family: 'Nunito'; font-size: 12pt;">
                <!-- Add employee -->
                დამატება
            </button>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="display: block; text-align: center; font-size: 24px; font-family: 'Roboto', sans-serif; color: #8BA2FF;">
                            <!-- Register A Employee -->
                            თანამშრომლის რეგისტრაცია
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('register.employee') }}" method="POST" id="add_employee_form">
                            <!-- <p id="company_label" style="display: block; text-align: center; font-size: 24px; font-family: 'Roboto', sans-serif; color: #8BA2FF;">Register A User</p> -->

                            @csrf

                            <!-- First Name -->
                            <div id="first_name_div">
                                <!-- <x-label for="first_name" :value="__('First name')" /> -->
                                <x-label for="first_name" :value="__('სახელი')" />

                                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" autofocus />
                            </div>

                            <!-- Last Name -->
                            <div id="last_name_div" class="mt-4">
                                <!-- <x-label for="last_name" :value="__('Last name')" /> -->
                                <x-label for="last_name" :value="__('გვარი')" />

                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" autofocus />
                            </div>

                            <!-- Select Option Rol type -->
                            <div class="mt-4" id="role_id_div" style="display: none">
                                <x-label for="role_id" value="{{ __('Register as:') }}" />
                                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                    <option id="role_option_value" value="user"></option>
                                </select>
                            </div>

                            <div class="mt-4" id="role_id_div">
                                <!-- <x-label for="project_id" value="{{ __('Projects:') }}" /> -->
                                <x-label for="project_id" value="{{ __('პროექტები:') }}" />
                                <fieldset>
                                    @foreach($projects as $project)
                                        <input type="checkbox" name="project_id[]" value="{{ $project->id }}" /> {{ $project->project_name }} <br>
                                    @endforeach
                                </fieldset>
                            </div>

                            

                            <!-- Company ID -->
                            <div class="mt-4" style="display: none;">
                                <x-label for="company_id" :value="__('Company ID')" />

                                <input id="company_id" class="block mt-1 w-full" type="text" name="company_id" value="{{ Auth::user()->id  }}" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <!-- <x-label for="email" :value="__('Email')" /> -->
                                <x-label for="email" :value="__('მეილი')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>


                            <!-- Password -->
                            <div class="mt-4">
                                <!-- <x-label for="password" :value="__('Password')" /> -->
                                <x-label for="password" :value="__('პაროლი')" />

                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <!-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> -->
                                <x-label for="password_confirmation" :value="__('დაადასტურეთ პაროლი')" />

                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                            <!-- <button type="sumbit">Submit</button> -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success" form="add_employee_form">
                            <!-- Add -->
                            დამატება
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <!-- Close -->
                            დახურვა
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <!-- max-w-7xl -->
    <div class="py-6 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">

            <!-- Projects div -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="all-employee w-full flex">
                        <div class="all-employee-icon">
                            <img src="/img/icons/all-employees-40.png" alt="All employees icon" width="30px" height="30px">
                        </div>
                        <p class="all-employess-text">
                            <!-- All Employees -->
                            ყველა თანამშრომელი
                        </p>
                    </div>

                    <div class="ptojects-div">
                        <p class="ptojects-div-header">
                            <!-- PROJECTS -->
                            <span style="font-size: 14pt; font-weight: bold;">პროექტები</span>
                        </p>

                        <div class="projects w-full">
                            @foreach($projects as $key => $project)
                                @php
                                    $random_keys = array_rand($colors, 3);
                                @endphp
                                <div class="project flex my-4">
                                    <button type="button" class="flex" data-bs-toggle="modal" data-bs-target="#exampleProjectModal{{$key}}">
                                        <div class="project-icon {{ $colors[$random_keys[0]] }}">
                                            <p> {{ strtoupper($project->project_name[0]) }}{{ strtoupper($project->project_name[1]) }} </p>
                                        </div>
                                        <p class="all-employess-text">{{ $project->project_name }} </p>
                                    </button>
                                </div>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleProjectModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content" style="border-radius: 10px !important; background-color: #F3F4F6 !important;">
                                            <div class="modal-header" style="border: none !important;">
                                                <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Nunito'; font-size: 10pt; font-weight: bold;"> 
                                                    <!-- Project start date:  --> პროექტის დაწყების თარიღი
                                                    <i> {{ $project->created_at }} </i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h1 style="font-weight: bold; font-size: 24px; text-align: center;">{{ $project->project_name }}</h1>
                                                <p style="padding: 10px; font-size: 18px;">  
                                                    <!-- Description:  -->აღწერა:
                                                <i> {{ $project->description }} </i> </p>
                                                <div class="my-5" style="width: 100%; display: flex;">
                                                    <p style="font-weight: bold; font-size: 22px;">
                                                        <!-- Project Members: -->
                                                        პროექტის წევრები
                                                    </p>
                                                    <button type="button" class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md hover:bg-green-100" style="margin-left: auto; order: 2;">Add member</button>
                                                </div>
                                                

                                                <!-- <ul>
                                                    @foreach($project_employees as $project_employee)
                                                        @if($project_employee->project_id == $project->id)
                                                            <li style="font-weight: bold; font-size: 18px; line-height: 30px;">
                                                                @foreach($employees as $myEmployee)
                                                                    @if($project_employee->employee_email == $myEmployee->email) 
                                                                        {{ $myEmployee->first_name }} {{ $myEmployee->last_name }}
                                                                    @break
                                                                    @endif
                                                                @endforeach
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul> -->

                                                <table class="min-w-max w-full table-auto border border-gray-200">
                                                    <thead>
                                                        <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                                            <th class="py-3 px-6 text-left border border-gray-200">
                                                                <!-- Employee -->
                                                                თანამშრომელი
                                                            </th>
                                                            <th class="py-3 px-6 text-center border border-gray-200">
                                                                <!-- Working Times -->
                                                                სამუშაო დროები
                                                            </th>
                                                            <th class="py-3 px-6 text-center border border-gray-200">
                                                                <!-- Status -->
                                                                სტატუსი
                                                            </th>
                                                            <th class="py-3 px-6 text-center border border-gray-200">
                                                                <!-- Actions -->
                                                                მოქმედება
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-gray-600 text-sm font-light">
                                                        @foreach($employees as $key => $employee)
                                                            @foreach($employee->project_id as $userProject)
                                                                @if($userProject == $project->id)
                                                                    <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                                                        <td class="py-3 px-6 text-left border border-gray-200">
                                                                            <div class="flex items-center">
                                                                                <div class="mr-2">
                                                                                    <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                                                                </div>
                                                                                <span> 
                                                                                    {{ $employee->first_name }} 
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="py-3 px-6 text-center border border-gray-200">
                                                                            <div class="flex items-center justify-center">
                                                                                <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">
                                                                                    <!-- Times -->
                                                                                    დროები
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="py-3 px-6 text-center border border-gray-200">
                                                                            <span class="bg-green-400 text-white py-1 px-3 rounded-full text-xs">
                                                                                <!-- Active -->
                                                                                აქტიური
                                                                            </span>
                                                                        </td>
                                                                        <td class="py-3 px-6 text-center border border-gray-200">
                                                                            <div class="flex item-center justify-center">
                                                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                                    <form action="{{ route('dashboard.deleteUserFormProject', ['id' => $employee->email, 'project_id' => $project->id]) }}" method="POST">
                                                                                        @csrf
                                                                                        @method('PATCH')
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
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Edit Project</button> -->
                                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">პროექტის რედატქირება</button>
                                                
                                                <!-- <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">End Project</button> -->
                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">პროექტის წაშლა</button>

                                                <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button> -->
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">დახურვა</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex mt-5" style="justify-content: center;">
                        <button class="px-4 py-2 font-semibold tracking-wider text-white rounded-full" data-bs-toggle="modal" data-bs-target="#exampleModalProject" style="font-family: 'Nunito'; font-size: 10pt; background: #8453df; margin: auto; font-weight: bold;">
                            <!-- Add Project -->
                            პროექტის დამატება
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered"> 
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="display: block; text-align: center; font-size: 24px; font-family: 'Roboto', sans-serif; color: #8BA2FF;">
                                    <!-- Add New Project -->
                                    ახალი პროექტის დამატება
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('dashboard.addProject', 1) }}" id="add_project_form">
                                    @csrf

                                    <!-- Project Name -->
                                    <div id="project_name_div" class="mt-4">
                                        <!-- <x-label for="project_name" :value="__('Project name')" /> -->
                                        <x-label for="project_name" :value="__('პროექტის სახელი')" />

                                        <x-input id="project_name" class="block mt-1 w-full" type="text" name="project_name" :value="old('project_name')" autofocus required />
                                    </div>

                                    <!-- Project Description -->
                                    <div id="project_description_div" class="mt-4">
                                        <!-- <x-label for="description" :value="__('Description')" /> -->
                                        <x-label for="description" :value="__('აღწერა')" />
                                        <textarea name="description" id="description" class="block mt-1 w-full border border-grey-200 rounded-md font-medium text-sm text-gray-700" :value="old('description')" autofocus></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="submit" class="btn btn-outline-success" form="add_project_form">Add</button> -->
                                <button type="submit" class="btn btn-outline-success" form="add_project_form">დამატება</button>

                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">დახურვა</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
        <div class="w-2/3 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm">
                <div class="">
                    <table class="min-w-max w-full table-auto border border-gray-200">
                        <thead>
                            <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                <!-- <th class="py-3 px-6 text-left border border-gray-200">Projects</th> -->
                                <th class="py-3 px-4 text-left border border-gray-200">პროექტები</th>

                                <!-- <th class="py-3 px-6 text-left border border-gray-200">Employee</th> -->
                                <th class="py-3 px-4 text-left border border-gray-200">თანამშრომელი</th>

                                <!-- <th class="py-3 px-6 text-center border border-gray-200">Working Times</th> -->
                                <th class="py-3 px-4 text-center border border-gray-200">სამუშაო დროები</th>

                                <!-- <th class="py-3 px-6 text-center border border-gray-200">Status</th> -->
                                <th class="py-3 px-4 text-center border border-gray-200">სტატუსი</th>

                                <!-- <th class="py-3 px-6 text-center border border-gray-200">Actions</th> -->
                                <th class="py-3 px-4 text-center border border-gray-200">მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($employees as $key => $employee)
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-4 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                <ol>
                                                    @foreach($project_employees as $Value)
                                                        @if($Value->employee_email == $employee->email)
                                                            <li>
                                                                @foreach($projects as $myProject)
                                                                    @if($Value->project_id == $myProject->id)
                                                                        {{ $myProject->project_name }}
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ol>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-left border border-gray-200">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                                <!-- <img class="w-6 h-6 rounded-full" src="/img/icons/man.png"/> -->
                                            </div>
                                            <span> 
                                                {{ $employee->first_name }} 
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center border border-gray-200">
                                        <div class="flex items-center justify-center">
                                            <span class="bg-indigo-200 text-white text-semibold py-1 px-3 rounded-full text-xs cursor-pointer">დროები</span>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center border border-gray-200">
                                        <span class="bg-green-400 text-white py-1 px-3 rounded-full text-xs">აქტიური</span>
                                    </td>
                                    <td class="py-3 px-4 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal{{$key}}"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="{{ route('dashboard.deleteUser', $employee->id) }}" method="POST">
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
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="employeeEditModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="display: block; text-align: center; font-size: 24px; font-family: 'Roboto', sans-serif; color: #8BA2FF;">
                                                    <!-- Edit Employee -->
                                                    რედატქირება
                                                </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('dashboard.editUser', $employee->id) }}" method="POST" id="edit_employee_form{{$key}}">

                                                        @csrf
                                                        @method('PUT')
                                                        <!-- First Name -->
                                                        <div id="first_name_div">
                                                            <!-- <x-label for="first_name" :value="__('First name')" /> -->
                                                            <x-label for="first_name" :value="__('სახელი')" />

                                                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $employee->first_name }}" autofocus />
                                                        </div>

                                                        <!-- Last Name -->
                                                        <div id="last_name_div" class="mt-4">
                                                            <!-- <x-label for="last_name" :value="__('Last name')" /> -->
                                                            <x-label for="last_name" :value="__('გვარი')" />

                                                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $employee->last_name }}" autofocus />
                                                        </div>

                                                        <!-- Select Option Rol type -->
                                                        <div class="mt-4" id="role_id_div" style="display: none">
                                                            <x-label for="role_id" value="{{ __('Register as:') }}" />
                                                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option id="role_option_value" value="user"></option>
                                                            </select>
                                                        </div>

                                                        <div class="mt-4" id="role_id_div">
                                                            <!-- <x-label for="project_id" value="{{ __('Projects:') }}" /> -->
                                                            <x-label for="project_id" value="{{ __('პროექტები:') }}" />
                                                            <fieldset>
                                                                @if($employee->project_id)
                                                                    @foreach($projects as $project)
                                                                        @foreach($employee->project_id as $value)
                                                                            @if($value == $project->id)
                                                                                <p style="display: none;">{{ $checker = true }}</p>
                                                                            @endif
                                                                        @endforeach

                                                                        @if($checker) <input type="checkbox" name="project_id[]" value="{{ $project->id }}" checked /> {{ $project->project_name }} <br>
                                                                        @else <input type="checkbox" name="project_id[]" value="{{ $project->id }}" /> {{ $project->project_name }} <br>
                                                                        @endif
                                                                        <p style="display: none;">{{ $checker = false }}</p> 
                                                                    @endforeach
                                                                @else
                                                                    @foreach($projects as $project)
                                                                        <input type="checkbox" name="project_id[]" value="{{ $project->id }}" /> {{ $project->project_name }} <br>
                                                                    @endforeach
                                                                @endif
                                                            </fieldset>
                                                        </div>

                                                        <!-- Company ID -->
                                                        <div class="mt-4" style="display: none;">
                                                            <x-label for="company_id" :value="__('Company ID')" />

                                                            <input id="company_id" class="block mt-1 w-full" type="text" name="company_id" value="{{ Auth::user()->id  }}" />
                                                        </div>

                                                        <!-- Email Address -->
                                                        <div class="mt-4" style="display: none;">
                                                            <x-label for="email" :value="__('Email')" />

                                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $employee->email }}" required />
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-success" form="edit_employee_form{{$key}}">
                                                        <!-- Edit -->
                                                        რედატქირება
                                                    </button>
                                                    <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">დახურვა</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>