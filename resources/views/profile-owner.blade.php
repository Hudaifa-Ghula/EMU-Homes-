<x-laylay>

    <br><br>
    <br><br><br>

        <x-auth-card>
            <h2>Update Personal info</h2>
            <br><br>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="\updateprofile" enctype="multipart/form-data">
                @csrf
                @if (null != Auth::user()->pic)
                <img class="cropped4" src="{{asset('public/image')}}/{{Auth::user()->pic->link}}" alt="">
@else
<img src="{{asset('public/image')}}/default.jpg" class="cropped4" alt="">

                @endif
                <div class="mt-4">
                    <x-label for="image" value="update profile picture" />

    <br>
                    <input type="file" accept="image/*" name="image" class="form-control form-control-lg form-control-a">
                </div> <br>
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="form-control form-control-lg form-control-a" type="text" name="name" :value="Auth::user()->name" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="form-control form-control-lg form-control-a" type="email" name="email" :value="Auth::user()->email" required />
                </div>

                {{-- <!-- Password -->
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
                                    name="password_confirmation" required :value="Auth::user()->email"/>
                </div> --}}


                <div class="mt-4">
                    <x-label for="number" value="Contact Number" />

    <br>

                    <input type="text" placeholder="+901234567890"  value="{{Auth::user()->contact}}" name="contact" class="form-control form-control-lg form-control-a">
                </div>



                <div class="flex items-center justify-end mt-4">


                    <input type="submit" class="btn btn-a">


                </div>
            </form>

        </x-auth-card>
        <br><br>
        <div class="container">
            <div class="row">
              <div class="col-sm-12">
        <a href="addp" class="btn btn-a">Add a property</a>
              </div>
            </div>
        </div>
        <br><br>
    </x-laylay>
