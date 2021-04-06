<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-8 py-6 bg-gray-200 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg">{{ __('Register') }}</div>

                    <form class="" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6 ">
                            <label for="username" >{{ __('Username') }}</label>

                            <input class="border border-gray-400 p-2 w-full" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="name">{{ __('Name') }}</label>

                                <input class="border border-gray-400 p-2 w-full" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                                <input class="border border-gray-400 p-2 w-full" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" >{{ __('Password') }}</label>

                                <input class="border border-gray-400 p-2 w-full" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <input class="border border-gray-400 p-2 w-full" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="px-6 py-4 mt-2 rounded text-sm uppercase bg-blue-600 text-white">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
           
        </div>
    </div>
</div>
</x-master>