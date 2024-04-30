<x-guest-layout>
    <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-md shadow-lg w-full overflow-hidden" style="max-width:1100px">
            <div class="md:flex w-full">
                <div class="hidden md:block w-1/2 bg-indigo-500">
                    <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" srcset="" style="max-height: 700px">
                </div>
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10 bg-white">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-heading tracking-widest">REGISTER</h1>
                    </div>
                    <form class="w-auto" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="flex gap-6 -mx-3 mb-6">
                            <div class="w-1/2">
                                <div class="relative">
                                    <input type="text" id="fullname"
                                        class="block pb-2.5 pt-4 w-full text-sm bg-transparent border-b-2 border-primary appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " name="name" :value="old('name')" required
                                        autocomplete="name" />
                                    <label for="fullname"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Fullname</label>
                                </div>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="w-1/2">
                                <div class="relative">
                                    <input type="text" id="address"
                                        class="block pb-2.5 pt-4 w-full text-sm bg-transparent border-b-2 border-primary appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " name="address" :value="old('address')" required />
                                    <label for="address"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Address</label>
                                </div>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                        </div>
                        <div class="-mx-3 mb-6">
                            <div class="relative w-full">
                                <input type="text" id="email"
                                    class="block pb-2.5 pt-4 w-full text-sm bg-transparent border-b-2 border-primary appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " name="email" :value="old('email')" required />
                                <label for="email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="-mx-3 mb-4">
                            <div class="relative w-full">
                                <input type="password" id="password"
                                    class="block pb-2.5 pt-4 w-full text-sm bg-transparent border-b-2 border-primary appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " name="password" :value="old('password')" required />
                                <label for="password"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="-mx-3 mb-6">
                            <div class="relative w-full">
                                <input type="password" id="password_confirmation"
                                    class="block pb-2.5 pt-4 w-full text-sm bg-transparent border-b-2 border-primary appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " name="password_confirmation" :value="old('password_confirmation')"
                                    required />
                                <label for="password_confirmation"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Confirm
                                    password</label>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="mb-10 flex justify-end">
                            <p class="text-gray text-sm mt-3 font-semibold">Do you already have an account?
                                <a class="underline text-sm text-gray hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-semibold"
                                    href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <button
                                    class="block w-full max-w-xs mx-auto bg-primary hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
