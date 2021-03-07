<x-app-layout>
    <x-slot name="header">
        <div class="">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Profile</h2>
        </div>
    </x-slot>

    <div class="py-10 mx-5">
        <div class="w-1/2 mx-auto bg-indigo-300 p-4 rounded-lg ">


            <form action="{{route('cms.profile.update')}}" method="post">
                <div class="py-4 my-6 max-w-md mx-auto">
                    <div class="grid grid-cols-1 gap-6">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Full name</span>
                                <input type="text"
                                value="{{$admin->name}}"
                                class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required />
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Phone</span>
                                <input type="tel" 
                                value="{{$admin->phone}}"
                                class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required />
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">User type</span>
                                <select class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" disabled>
                                    <option>{{$admin->type}}</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Address</span>
                                <textarea class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" rows="3">
                                {{$admin->address}}
                                </textarea>
                            </label>
                        </div>

                        <button type="submit" class="w-1/2 py-3 mt-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-800">
                        Submit
                        </button>

                    </div>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>