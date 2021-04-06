<x-master>
<div class="container mx-auto flex justify-center ">
    <div class="px-8 py-6 bg-gray-200 rounded-lg">
        <div class="col-md-8">
                <div class="text-lg font-bold">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                            <input class="border border-gray-400 p-2 w-full" id="email" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="">{{ __('Password') }}</label>

                                <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                        </div>

                            <div class="mb-6">
                                <button type="submit" class="px-6 py-4 mt-2 rounded text-sm uppercase bg-blue-600 text-white">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-cs text-gray-700" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                    </form>
               
        </div>
    </div>
</div>
</x-master>
