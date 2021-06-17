<div>
    <div class="mt-8 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">
            <p style="font-family: 'Nunito'; font-size: 18pt; font-weight: bold; margin: 0px !important;">Work</p>
        </div>
        <div class="w-2/3 sm:px-6 lg:px-8">
            @if(Auth::user()->status == 'active')
                <button class="float-right bg-green-400 px-3 py-2.5 font-semibold tracking-wider text-white rounded-full hover:bg-green-500" data-bs-toggle="modal" data-bs-target="#startWorkingModal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                    მუშაობის დაწყება
                </button>
            @endif

            @if(Auth::user()->status == 'working')
                <button class="flex float-right bg-blue-400 mx-3 px-3 py-2 font-semibold tracking-wider text-white rounded-full hover:bg-blue-500" data-bs-toggle="modal" data-bs-target="#pauseWorkingModal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                    <span class="mt-1">დაპაუზება</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>

                <button class="float-right bg-red-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white rounded-full hover:bg-red-500" data-bs-toggle="modal" data-bs-target="#endWorkingModal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                    <span class="mt-1">დასრულება</span>
                </button>

                <div class="flex float-right px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#DC2626">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="flex h-3 w-3 -ml-2">
                        <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-purple-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
                    </span>
                </div>
            @endif

            @if(Auth::user()->status == 'resting')
                <button class="flex float-right bg-yellow-400 mx-3 px-3 py-2 font-semibold tracking-wider text-white rounded-full hover:bg-yellow-500" data-bs-toggle="modal" data-bs-target="#resumeWorkingModal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                    <span class="mt-1">გაგრძელება</span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            @endif
            
        </div>

        <!-- Start Working Modal -->
        <div wire:ignore.self class="modal fade" id="startWorkingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS regular; font-size: 14pt; font-weight: bold;">
                            მუშაობის დაწყება
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="/img/clip-1674.png" alt="start working illustration" style="width: 300px; margin: auto;">
                        <form wire:submit.prevent="startWorking()" id="start_working_form">
                            <select wire:model="project" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="" selected>
                                    აირჩიეთ პროექტი
                                </option>
                                @foreach($projects as $project)
                                    @if($project->project_status == "suspend" || $project->project_status == "finished")
                                        <option value="{{ $project->project_name }}" disabled>{{ $project->project_name }}</option>
                                    @else
                                        <option value="{{ $project->project_name }}">{{ $project->project_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-info" form="start_working_form" style="font-family: TBC Contractica CAPS regular;">
                            დაწყება
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pause Working Modal -->
        <div wire:ignore.self class="modal fade" id="pauseWorkingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black !important; font-size: 10pt !important;">დაპაუზება</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="font-family: TBC Contractica CAPS regular !important; font-size: 10pt !important;">ნამდვილად გსურთ სამუშაო დროის დაპაუზება?</p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">დახურვა</button> -->
                        <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დახურვა</span>
                        </button>
                        <button wire:click="pauseWorking()" class="float-right bg-blue-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-blue-500" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დაპაუზება</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resume Working Modal -->
        <div wire:ignore.self class="modal fade" id="resumeWorkingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black !important; font-size: 10pt !important;">გაგრძელება</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="font-family: TBC Contractica CAPS regular !important; font-size: 10pt !important;">ნამდვილად გსურთ სამუშაო დროის გაგრძელება?</p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">დახურვა</button> -->
                        <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დახურვა</span>
                        </button>
                        <button wire:click="resumeWorking()" class="float-right bg-yellow-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-yellow-500" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">გაგრძელება</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Working Modal -->
        <div wire:ignore.self class="modal fade" id="endWorkingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black !important; font-size: 10pt !important;">დასრულება</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="font-family: TBC Contractica CAPS regular !important; font-size: 10pt !important;">ნამდვილად გსურთ სამუშაოს დასრულება?</p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">დახურვა</button> -->
                        <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დახურვა</span>
                        </button>
                        <button wire:click="endWorking()" class="float-right bg-red-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-red-500" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დასრულება</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
