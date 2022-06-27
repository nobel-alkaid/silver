<x-dash-layout :auth=true>
    <div class="w-full">
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Se connecter
        </h1>
        
        <x-forms.login />

        <hr class="my-8">

        {{-- <x-buttons.dashboard.google class="mb-4" />
        <x-buttons.dashboard.facebook /> --}}

        <p class="mt-4">
            <a class="text-sm font-medium text-main dark:text-main hover:underline"
                href="./forgot-password.html">
                Forgot your password?
            </a>
        </p>
        <p class="mt-1">
            <a class="text-sm font-medium text-main dark:text-main hover:underline"
                href="./create-account.html">
                Create account
            </a>
        </p>
    </div>
</x-dash-layout>