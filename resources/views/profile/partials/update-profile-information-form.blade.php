<section>
    <header>

        {{-- <div class="row">
            <x-adminlte-input name="iLabel" label="Actualice la información del perfil y la dirección de correo electrónico de su cuenta." 
                fgroup-class="col-md-6" disable-feedback/>
        </div> --}}
        <p class="mt-1 text-md text-gray-600 dark:text-gray-400">
            {{ __("Actualice la información del perfil y la dirección de correo electrónico de su cuenta.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="row">
            <x-adminlte-input name="NombreUser" label="Nombre Completo de Usuario" 
                fgroup-class="col-md-6" disable :value="old('name', $persona->VC_NOMBRECOMPLETO)" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />  
        </div>
        <div class="row">
            <x-adminlte-input id="email" name="email" type="email" label="Correo Institucional" 
                fgroup-class="col-md-6" disable :value="old('email', $user->email)"  />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-lg-center bg-green-600 text-gray-200"
                >{{ __('Guardar.') }}</p>
            @endif
        </div>
    </form>
</section>
