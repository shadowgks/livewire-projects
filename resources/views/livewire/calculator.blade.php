<div class="flex gap-6 justify-center items-center p-16">
    <input class="border border-black pl-3" type="text" wire:model="number1">
    <select class="border border-black" wire:model="actions" name="" id="">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        <option>%</option>
    </select>
    <input class="border border-black pl-3" type="text" wire:model="number2">
    <button wire:click="calculator"
    class="bg-blue-600 text-white px-3 rounded-xl disabled:cursor-not-allowed disabled:bg-opacity-90"
    {{$disabled ? 'disabled' : ''}}>=</button>

    {{-- Resulte Final--}}
    <div class="">
        Results = <span>{{$result}}</span>
    </div>
</div>
