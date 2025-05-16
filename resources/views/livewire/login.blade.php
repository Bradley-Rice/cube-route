<div class="modal" id="testingModal">
    <x-guest-layout>
    <!-- <x-authentication-card> -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <!-- <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div> -->
        @endsession

        <form method="POST" action="_{{ route('login.attempt') }}">
            @csrf
            <input type="email">
            <input type="password">
            <button type="submit">Login</button>
        </form>
    <!-- </x-authentication-card> -->
</x-guest-layout>

</div>