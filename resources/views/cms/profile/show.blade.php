<x-app-layout>
    <x-slot name="header">
        <div class="">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Profile</h2>
        </div>
        <div class="">
            <a href="{{route('cms.profile.edit', [$admin->id])}}" class="p-2 bg-pink-600 text-white font-semibold rounded-lg hover:bg-pink-500">Edit Profile</a>
        </div>
        
    </x-slot>

    <div class="py-10 mx-12">
        <div class="bg-red-200 p-6 bg-white border-b border-gray-200 rounded-lg ">

            <div class="font-mono text-center text-lg py-2">
                <h4>Profile Details</h4>
            </div>

            <div>
                <ul class="list-disc list-inside">
                   <li>Name: {{$admin->name}}</li>
                   <li>Email: {{$admin->email}}</li>
                   <li>Type: {{$admin->type}}</li>
                   <li>Phone: {{$admin->phone}}</li>
                   <li>Address: {{$admin->address}}</li>
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>