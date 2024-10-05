<div>
    <x-mary-card title="Update Product" no-separator>
        <x-mary-form wire:submit.prevent="edit">
            {{ $this->form }}

           <x:slot:actions>
            <x-mary-button type="submit" spinner="edit">
                Submit
            </x-mary-button>
           </x:slot:actions>
        </x-mary-form>


    </x-mary-card>
</div>
