<div>
    <x-mary-form class="bb-popnews-form mt-[0]" wire:submit="sentMail" no-separator>
        <input type="email" name="mail" wire:model.live='mail' placeholder="Email Address"
            class="mb-[20px] bg-transparent border-[1px] border-solid border-[#eee] text-[#3d4750] text-[14px] py-[10px] px-[15px] w-full outline-[0] rounded-[10px] font-normal">
        @error('mail')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <x-slot:actions>
            <x-mary-button type="submit"
                class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] hover:bg-green-500 rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"
                spinner="sentMail">Subscribe</x-mary-button>
        </x-slot:actions>
    </x-mary-form>
</div>
