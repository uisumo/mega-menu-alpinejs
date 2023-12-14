<div>
    <svg 
        wire:click="showModal"  
        fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" 
        class="mt-1 w-5 h-5 cursor-pointer hover:fill-blue-500 hover:border-none hover:outline-none">
        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
    </svg>
    
    <x-dialog-modal wire:model="openModal">
            <x-slot name="title">Here is the info</x-slot>
            <x-slot name="content">
            <x-input />
            </x-slot>
            <x-slot name="footer">
            <x-button class="focus:ring-green-700 bg-gradient-to-br from-green-600 to-gray-800 text-white mr-2">Confirm</x-button>
            <x-button wire:click="closeModal">Cancel</x-button>
            </x-slot>
    </x-dialog-modal>
</div>
