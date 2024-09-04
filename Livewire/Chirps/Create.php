<?php

namespace KimSpeer\Chirper\Livewire\Chirps;

use Livewire\Component;

class Create extends Component
{
    public string $message = '';

    public function render()
    {
        return <<<'blade'
        <div>
            <form wire:sibmit="store">
            <textarea
                wire:model="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 rounded-md shadow-sm dark: focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            ></textarea>
            <x-input-error :for="$errors->get('message')" class="mt-2" />
            <x-button class="mt-4">{{ __('Chirp') }}</x-button>
        </div>
        blade;
    }
}
