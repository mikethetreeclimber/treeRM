<div>

    <form method="POST" action="{{ route('user_management.store') }}">
        @csrf

        <select name="roles" id="roles">
            <option value="">Select a role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>


        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />
        </div>
        <div class=" text-right">
            <x-button class="mt-2 ml-4" type="submit">
                <span class="">
                    {{ __('Register') }}
                </span>
            </x-button>
        </div>
        </div>
    </form>
</div>
