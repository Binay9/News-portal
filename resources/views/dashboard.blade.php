<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-10">
            <div class="flex justify-between bg-white overflow-hidden sm:rounded-lg p-4 px-8 mx-4">
                <div class="">
                    Welcome... {{$name}} <br>You're logged in as {{$user}}.
                </div>
                <div class="pt-2">
                    <a href="{{route('cms.profile')}}" class="p-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-800">View Profile</a>
                </div>
            </div>
    </div>

</x-app-layout>