<form class="mx-auto max-w-xl">


    <div class="mt-12 space-y-12">
        <h1
            class="bg-gr mt-12 rounded-lg border bg-gradient-to-r from-amber-300 to-pink-300 p-2 text-center text-3xl font-semibold text-slate-800">
            hello, bro'
        </h1>
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="mb-10 text-center text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
            <div class="mt-3 sm:col-span-full">
                <label class="block text-sm font-medium leading-6 text-gray-900" for="full-name">Full Name</label>
                <input
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    id="full-name" name="full-name" type="text" autocomplete="given-name">
            </div>
            <div class="mt-3 sm:col-span-full">
                <label class="block text-sm font-medium leading-6 text-gray-900" for="email">Email
                    address</label>
                <div class="mt-2">
                    <input
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        id="email" name="email" type="email" autocomplete="email" required>
                </div>
            </div>
            <div class="mt-3 sm:col-span-full">
                <label class="block text-sm font-medium leading-6 text-gray-900" for="phone">Phone</label>
                <input
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    id="phone" name="phone" type="tel" required>
            </div>
            <div class="col-span-full mt-3">
                <label class="block text-sm font-medium leading-6 text-gray-900" for="about">About</label>
                <div class="mt-2">
                    <textarea
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        id="about" name="about" rows="3">Write a few sentences about yourself.</textarea>
                </div>

            </div>
        </div>
    </div>





    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button
            class="rounded-md bg-gradient-to-r from-amber-300 to-pink-300 px-3 py-2 text-sm font-semibold text-black shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            type="submit">Save</button>
    </div>

</form>
