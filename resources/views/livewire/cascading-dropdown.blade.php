<div class="flex gap-6 justify-center items-center p-16">
    <div>
        <select wire:model='getValueContinent' wire:change='selectedContinent' name="" id="">
            <option selected value="-1">Select Continent  Here</option>
            @foreach ($continents as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="flex relative">
        <p wire:loading class="absolute left-0 right-0 bottom-0 top-0 z-10 bg-white py-2 px-3">Loading</p>
        <select name="" id="">
            <option selected value="-1">Select Country Here</option>
            @foreach ($countries as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
</div>
