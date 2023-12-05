@include('partials._header')
<x-bgTop/>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-logo1/>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up</h2>
        </div>
    
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="fname" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                    <div class="mt-2">
                    <input id="fname" name="fname" type="text" placeholder="Juan"{{-- autocomplete="email" --}} required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-lime-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="lname" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                    <div class="mt-2">
                    <input id="lname" name="lname" type="text" placeholder="Dela Cruz"{{-- autocomplete="email" --}} required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-lime-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" placeholder="sample@gmail.com" autocomplete="email" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-lime-600 sm:text-sm sm:leading-6">
                </div>
                </div>
    
                <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-lime-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-lime-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-600">Sign up</button>
                </div>
            </form>
    
            <p class="mt-10 text-center text-sm text-gray-500">
                Member already?
                <a href="/login" class="font-semibold leading-6 text-lime-600 hover:text-lime-500">Sign in</a>
            </p>
        </div>
    </div>
<x-bgBottom/>

@include('partials._footer')