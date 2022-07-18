<x-laylay>

<br><br>
<br><br><br>

    <x-auth-card>
        <h2>Create an agent Account</h2>
        <br><br>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="form-control form-control-lg form-control-a" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control form-control-lg form-control-a" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control form-control-lg form-control-a"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control form-control-lg form-control-a"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <input type="text" name="role" value ="2" hidden>
            <input type="text" name="gender" value ="n/a" hidden>

            <div class="mt-4">
                <x-label for="number" value="Contact Number" />

<br>
                <input type="text" placeholder="+901234567890"  name="contact" class="form-control form-control-lg form-control-a">
            </div>

            <div class="mt-4">
                <x-label for="image" value="add a profile picture" />

<br>
                <input type="file" accept="image/*" name="image" class="form-control form-control-lg form-control-a">
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="btn btn-b">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>


</x-laylay>
