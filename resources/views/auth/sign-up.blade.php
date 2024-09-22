<x-layout>
    <x-section-wrapper class="my-8">
        <div class="text-center space-y-2 my-10">
            <h1
                class="text-5xl font-bold bg-gradient-to-b text-transparent bg-clip-text from-indigo-100 via-indigo-300 to-indigo-600 inline-block">
                Start Your Journey to Finding Top Talent!
            </h1>
            <p class="text-indigo-500 font-medium"> Empower your hiring process and discover the perfect
                candidates with just a few clicks.
            </p>
        </div>
        <form action="#" class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="FirstName" class="block text-sm font-medium">
                    First Name
                </label>

                <input type="text" id="FirstName" name="first_name"
                    class="mt-1 w-full rounded-md py-2 px-2 bg-slate-50 outline-none focus:border-indigo-400 border-2 text-sm shadow-sm text-gray-700" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="LastName" class="block text-sm font-medium">
                    Last Name
                </label>

                <input type="text" id="LastName" name="last_name"
                    class="mt-1 w-full rounded-md py-2 px-2 bg-slate-50 outline-none focus:border-indigo-400 border-2 text-sm shadow-sm text-gray-700" />
            </div>

            <div class="col-span-6">
                <label for="Email" class="block text-sm font-medium"> Email </label>

                <input type="email" id="Email" name="email"
                    class="mt-1 w-full rounded-md py-2 px-2 bg-slate-50 outline-none focus:border-indigo-400 border-2 text-sm shadow-sm text-gray-700" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="Password" class="block text-sm font-medium"> Password </label>

                <input type="password" id="Password" name="password"
                    class="mt-1 w-full rounded-md py-2 px-2 bg-slate-50 outline-none focus:border-indigo-400 border-2 text-sm shadow-sm text-gray-700" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="PasswordConfirmation" class="block text-sm font-medium">
                    Password Confirmation
                </label>

                <input type="password" id="PasswordConfirmation" name="password_confirmation"
                    class="mt-1 w-full rounded-md py-2 px-2 bg-slate-50 outline-none focus:border-indigo-400 border-2 text-sm shadow-sm text-gray-700" />
            </div>

            <div class="col-span-6">
                <p class="text-sm text-gray-500">
                    By creating an account, you agree to our
                    <x-link> terms and conditions </x-link>
                    and
                    <x-link>privacy policy</x-link>.
                </p>
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                <button
                    class="inline-block shrink-0 rounded-md border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                    Create an account
                </button>

                <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                    Already have an account?
                    <x-link>Sign in</x-link>.
                </p>
            </div>
        </form>
    </x-section-wrapper>
</x-layout>
