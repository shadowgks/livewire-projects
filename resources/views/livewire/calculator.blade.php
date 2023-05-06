<div class="flex gap-6 justify-center items-center p-16">
    <input type="number" wire:model="number1">
    <select wire:model="actions" name="" id="">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        <option>%</option>
    </select>
    <input type="number" wire:model="number2">
    <button wire:click="calculator"
    class="bg-blue-600 text-white py-2 px-3 rounded-sm disabled:cursor-not-allowed disabled:bg-opacity-90"
    {{$disabled ? 'disabled' : ''}}>=</button>

    {{-- Resulte Final--}}
    <div class="">
        Results = <span>{{$result}}</span>
    </div>
</div>
