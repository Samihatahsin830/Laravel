<x-backend.layouts.master>
    <x-slot name="pageTitle">
        table
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Dashboard</x-slot>
        <li class="breadcrumb-item active">Dashboard</li>
    </x-backend.partials.elements.breadcrumb>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Product
{{-- @can('create-product') --}}
          
            <a class="btn btn-info" href="{{route('products.create')}}">Add New product</a>
{{-- @endcan --}}
        </div>
        <div class="card-body">
           <x-backend.partials.elements.message :message="session('message')"/>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>name</th>
                        <th>price</th>
                        <th>category_name</th>
                        <th>brand_name</th>
                        <th>Discount</th>
                        <th>description</th>
                        
                        

                        <th width="400px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{++$sl}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category_name}}</td>
                        <td>{{$product->brand_name}}</td>
                        <td>{{$product->description}}</td>
                      
                        <td>{{ $product->status?'active':'deactive' }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{route('products.show',['product'=>$product->id])}}"
                                style="font-size:11px"><small>Show</small></a>

                            <a class="btn btn-warning btn-sm"
                                href="{{route('products.edit',['product'=>$product->id])}}"
                                style="font-size:11px"><small>Edit</small></a>

                            <form style="display:inline"
                                action="{{route('products.destroy',['product'=>$product->id])}}" method="post">@csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('sure you want to delete?')"
                                    style="font-size:11px"><small>Delete

                                    </small></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          

        </div>
    </div>

</x-backend.layouts.master>