<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div style="width: 100%; height: 200px; border-radius: 0 0 25px 25px; background: rgb(225,98,118); background: linear-gradient(90deg, rgba(225,98,118,1) 0%, rgba(234,139,160,1) 100%); position: absolute; top: 0px;">
        {{ $logo }}
        
    </div>
    <div>
        {{ $logo }}
    </div>

    <div style="position: absolute; top: 110px; z-index: 5;" class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
