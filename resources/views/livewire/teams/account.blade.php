<div class="sm:mx-auto sm:w-full sm:max-w-md">
  <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
    Complete your account
  </h2>
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form wire:submit.prevent="complete">
        <div>
          <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
            Name
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model.lazy="name" id="name" name="name" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
          </div>
          @error('name')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
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
          <div class="relative flex items-start">
            <input wire:model.lazy="termOfUse" id="term_of_use" name="term_of_use" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"/>
            <label for="term_of_use" class="ml-2 block text-sm leading-5 text-gray-900">I agree to **company**
              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Terms of use</a>.</label>
          </div>
          <div>
            @error('termOfUse')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
          </div>
        </div>

        <div class="mt-6">
          <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
              Complete
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>
