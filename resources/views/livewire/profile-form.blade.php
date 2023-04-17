<div>
    <form class="mx-auto max-w-xl" action="/profiles" method="post" wire:submit.prevent='submitForm'>
        @csrf



        <div class="mt-12 space-y-12">

            <h1
                class="mt-12 rounded-lg border bg-gradient-to-r from-amber-500 to-purple-600 bg-clip-text p-2 text-center text-4xl font-semibold text-transparent text-slate-800">
                Profile creation form
            </h1>


            @if ($successMessage)
                <div class="my-3 flex justify-between bg-green-300 p-1 text-xs font-bold text-green-800 opacity-60">
                    <div class="p-1">{{ $successMessage }}</div>
                    <button
                        class="rounded-sm bg-green-700 p-1 px-1 text-xs text-green-300 hover:bg-green-300 hover:text-green-700"
                        type="button" wire:click="$set('successMessage',null)">close</button>
                </div>
            @endif



            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="mb-10 text-center text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <div class="mt-3 sm:col-span-full">
                    <label class="block text-sm font-medium leading-6 text-gray-900" for="fullname">Full Name</label>
                    <input
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        id="fullname" name="fullname" type="text" value="{{ old('fullname') }}"
                        wire:model="fullname" autocomplete="username">
                </div>

                <div class="mt-3 sm:col-span-full">
                    <label class="block text-sm font-medium leading-6 text-gray-900" for="email">Email
                        address</label>
                    <div class="mt-2">
                        <input
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="email" name="email" type="email" value="{{ old('email') }}"
                            autocomplete="email" wire:model="email" required>
                    </div>
                </div>
                <div class="mt-3 sm:col-span-full">
                    <label class="block text-sm font-medium leading-6 text-gray-900" for="phone">Phone</label>
                    <input
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        id="phone" name="phone" type="tel" value="{{ old('phone') }}" required
                        wire:model="phone">
                </div>
                <div class="col-span-full mt-3">
                    <label class="block text-sm font-medium leading-6 text-gray-900" for="about">About</label>
                    <div class="mt-2">
                        <textarea
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="about" name="about" rows="3" wire:model="about">{{ old('about') ?? 'Write a few sentences about yourself.' }}</textarea>
                    </div>

                    @error('about')
                        <p class="text-bold mt-2 bg-red-300 py-1 pl-2 text-xs text-red-900 opacity-0">
                            {{ $message }}</p>
                    @enderror
                </div>
                @foreach (['fullname', 'email', 'phone', 'about'] as $field)
                    @error($field)
                        <p class="text-bold mt-2 bg-red-300 py-1 pl-2 text-xs text-red-900 opacity-80">
                            {{ $message }}</p>
                    @enderror
                @endforeach
            </div>


        </div>





        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                class="inline-flex items-center rounded-md bg-gradient-to-r from-amber-300 to-pink-300 px-3 py-2 text-sm font-semibold text-black shadow-md hover:bg-indigo-500 hover:shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50"
                type="submit">
                <svg class="-ml-1 mr-3 h-5 w-5 animate-spin text-white" wire:loading wire:target='submitForm'
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span>Save</span></button>
        </div>

    </form>
</div>
