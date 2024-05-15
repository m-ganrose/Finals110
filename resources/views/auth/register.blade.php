<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ !empty ($header_title) ? $header_title : ''}} Watch One Piece</title>
  <link rel="icon" href="{{ asset('dist/img/logo1.png') }}" type="image/x-icon">
	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #020507;
            background-image: linear-gradient(315deg, #131009 0%, #010508 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            {{-- <h1 class="text-4xl font-bold text-white text-center">Navigatu</h1> --}}
        </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section><center>
            <img src="{{ asset('/Sources') }}/logo1.png"  alt="">
            <h3 class="font-bold text-2xl">Create Accout</h3>
            <p class="text-gray-600 pt-2">Registration Form</p>
                </center>
        </section>
        <section class="mt-10">

             <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                     <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
              
              
            <div class="mb-6 pt-3 rounded bg-gray-200 form-group" hidden>
                <label>Role</label>
                <select name="usertype" class="form-control">
                <option value="user">user</option>
                
                </select>
            </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                 </div>

               <div class="mb-6 pt-3 rounded bg-gray-200">
                <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" /> 
           </div>

           <div class="mb-6 pt-3 rounded bg-gray-200">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            
            </div>

                <div class="block mt-4">
                      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            
            </form>
        </section>
    </main>

</body>
</html>


