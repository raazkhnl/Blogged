<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    <div class="card mt-3">
        <div class="card-body ml-10">
            <h1 class="text-xl text-success"><b><u> DETAILS</u></b></h1>
        <p><b>User Id: </b>{{ $user->id }}</p>
        <p><b>Name: </b>{{ $user->name }}</p>
        <p><b>Email: </b>{{ $user->email }}</p>
        <p><b>Account Created At: </b>{{ $user->created_at }}</h2>

        @if ($user->email_verified_at == null)
            <p><b>Email verified status: </b>Unverified</p>
        @else
            <p><b>Email verified status: </b>Verified On
                {{ $user->email_verified_at }}</p>
        @endif
        <b>Account Status: </b>
        <p class="text-success" style="display: inline"><b>You're logged in!</b></p>
    </div>
</div>
</x-app-layout>
