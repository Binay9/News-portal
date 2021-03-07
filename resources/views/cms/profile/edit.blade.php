<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-start">
        <div class="mx-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Profile</h2>
        </div>
        <div class="mx-2">
            <a href="{{route('cms.profile.show', [$admin->id]) }}" class="p-1 bg-indigo-500 text-white font-semibold rounded-lg hover:bg-indigo-600">Go Back</a>
        </div>
    </div>
        <div class="">
            <a href="{{route('cms.pass')}}" class="p-2 bg-pink-600 text-white font-semibold rounded-lg hover:bg-pink-500">Change Password</a>
        </div>
    </x-slot>

    <div class="py-10 mx-5">
        <div class="w-1/2 mx-auto bg-indigo-300 p-4 rounded-lg ">


            <form action="{{route('cms.profile.update', [$admin->id])}}" method="post">
                <div class="py-4 my-6 max-w-md mx-auto">
                    <div class="grid grid-cols-1 gap-6">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Full name</span>
                                <input type="text" name="name" value="{{old('name') ? old('name') : $admin->name}}" class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required />
                            </label>
                            @error('name')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Phone</span>
                                <input type="tel" name="phone" value="{{old('phone') ? old('phone') : $admin->phone}}" class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required />
                            </label>
                            @error('phone')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
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
                                <textarea name="address" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" rows="3">{{old('address') ? old('address') : $admin->address}}</textarea>
                            </label>
                            @error('Address')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
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