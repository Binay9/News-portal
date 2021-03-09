<x-app-layout>
    <x-slot name="header">
        <div class="mx-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Article</h2>
        </div>
        <div class="mx-2">
            <a href="{{route('cms.articles') }}" class="p-1 bg-indigo-500 text-white font-semibold rounded-lg hover:bg-indigo-600">Go Back</a>
        </div>
    </x-slot>

    <div class="py-10 mx-5">
        <div class="w-1/2 mx-auto bg-indigo-300 p-4 rounded-lg ">


            <form action="" method="post">
                <div class="py-4 my-6 max-w-md mx-auto">
                    <div class="grid grid-cols-1 gap-6">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Full name</span>
                                <input type="text" name="name" value="{{old('name') ? old('name') : ''}}" class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required />
                            </label>
                            @error('name')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">User type</span>
                                <select class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" disabled>
                                    <option>ddd</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Address</span>
                                <textarea name="address" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" rows="3">{{old('address') ? old('address') : ''}}</textarea>
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