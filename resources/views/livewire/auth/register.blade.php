<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Crear cuenta')" :description="__('Ingresa los campos denajo para crearte tu cuenta')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Nombre')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Nombre Completo')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Dirección de correo electrónico')"
            type="email"
            required
            autocomplete="email"
            placeholder="Macelonga@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Contraseña')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Contraseña')"
            viewable
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirmar contraseña')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirmar contraseña')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Crear Cuenta') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Ya posees una cuenta?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Iniciar sesion') }}</flux:link>
    </div>
</div>
