<div>
    <div>
        <input type="text" wire:model.lazy='search' placeholder="Search">
    </div>
    <div>
        <table class="table-auto ">
            <thead class="bg-slate-600 text-white">
                <tr class="uppercase">
                    <th>id</th>
                    <th>picture</th>
                    <th>title</th>
                    <th>description</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody class="text-center">
                {{-- @dd($products[0]->id) --}}
                @foreach ($products as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><img src="{{$item->images}}" alt=""></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links() }}

    </div>
</div>
