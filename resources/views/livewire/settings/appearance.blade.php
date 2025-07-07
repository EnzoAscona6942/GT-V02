<section class="w-full min-h-screen" style="background: url('/fondodash.png') no-repeat center center fixed; background-size: cover;">
    @include('partials.settings-heading')

    <x-settings.layout :heading="'Apariencia'" :subheading="'Actualiza la apariencia de tu cuenta'">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="sun">Claro</flux:radio>
            <flux:radio value="dark" icon="moon">Oscuro</flux:radio>
            <flux:radio value="system" icon="computer-desktop">Sistema</flux:radio>
        </flux:radio.group>
    </x-settings.layout>
</section>
