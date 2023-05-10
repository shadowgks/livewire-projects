<div class="p-16">
    <form wire:submit.prevent="save">
        @if ($photo)
            <div class="flex justify-center pb-6">
                <img class="w-[200px] h-[200px]" src="{{ $photo->temporaryUrl() }}" alt="">
            </div>
        @endif

        <div class="flex justify-center">
            <input type="file" wire:model="photo">
        </div>

        <div class="flex justify-center mt-4">
            @error('photo')
                <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-center">
            <button class="px-4 py-2 text-white mt-4 bg-blue-600" type="submit">Save Photo</button>
        </div>
    </form>
</div>
