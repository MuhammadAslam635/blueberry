<div>
    <x-mary-card title="Create Product"  no-separator>
        <x-mary-form wire:submit.prevent="create" >
            {{ $this->form }}

           <x:slot:actions>
            <x-mary-button type="submit" spinner="create">
                Submit
            </x-mary-button>
           </x:slot:actions>
        </x-mary-form>
    </x-mary-card>
</div>
