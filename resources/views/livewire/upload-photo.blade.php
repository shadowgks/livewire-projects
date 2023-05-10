<div class="p-16">
    <form wire:submit.prevent="save">
        @if ($pictures)
            <div class="flex justify-center pb-6">
                @foreach ($pictures as $item)
                    <img class="w-[200px] h-[200px] object-fill" src="{{ $item->temporaryUrl() }}" alt="">
                @endforeach
            </div>
        @endif

        <div class="flex justify-center">
            <input type="file" wire:model="pictures" multiple>
        </div>

        <div class="flex justify-center mt-4">
            @error('pictures')
                <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-center">
            <button class="px-4 py-2 text-white mt-4 bg-blue-600" type="submit">Save Pictures</button>
        </div>
    </form>

    <div>
        {{-- @foreach ($pictures as $picture)
            <img src="{{ $picture }}" alt="">
        @endforeach --}}
    </div>
</div>
