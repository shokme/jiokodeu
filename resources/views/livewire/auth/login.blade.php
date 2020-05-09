<div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="login">
                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        Email
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="email" id="email" name="email" type="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                    @error('email')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" name="password" type="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                    @error('password')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" name="remember" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"/>
                        <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="/password-forgot" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
        <span class="block w-full rounded-md shadow-sm">
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
            Log in
          </button>
        </span>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm leading-5">
                      <span class="px-2 bg-white text-gray-500">
                          <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                              You don't have an account ?
                          </a>
                      </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>