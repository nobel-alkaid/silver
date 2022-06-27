<form method="POST" action="{{route('login')}}">
    @csrf

    <div class="block mb-4">
        <x-labels.label value="Email" for="email" />
        <x-inputs.text id="email" type="text" name="email" class="block w-full "
            placeholder="Email de connexion" />
    </div>

    <div class="block mb-4">
        <x-labels.label value="Mot de passe" for="password" />
        <x-inputs.text id="password" type="password" name="password" class="block w-full" label="Password"
            placeholder="Mot de passe" />
    </div>

    <div class="block mb-4">
        <x-inputs.checkbox id="remember" />
        <x-labels.label value="Rester connecté" for="remember" class="ml-2" />
    </div>

    <!-- You should use a button here, as the anchor is only used for the example  -->
    <x-buttons.button :text="__('Log in')" type="submit" />
</form>