<x-app-layout>
    <x-slot name="header">
        <div class="">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Change Password</h2>
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
                                <span class="text-gray-700">Old password</span>
                                <input type="password" name="password" value="" 
                                class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                                placeholder="Enter old password" required />
                            </label>
                            @error('password')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">New password</span>
                                <input type="password" name="new_password" value="" 
                                class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                                placeholder="Enter new password" required />
                            </label>
                            @error('password')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="block">
                                <span class="text-gray-700">Confirm new password</span>
                                <input type="password" name="confirm_password" value="" 
                                class="form-control mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                                placeholder="" required />
                            </label>
                            @error('password')
                            <p class="text-red-600 invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-1/2 py-3 mt-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-800">
                           Submit Change 
                        </button>

                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>