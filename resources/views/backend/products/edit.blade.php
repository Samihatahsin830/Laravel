<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Table
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Dashboard</x-slot>
        <li class="breadcrumb-item active">Dashboard</li>
    </x-backend.partials.elements.breadcrumb>


    <!-- <h1 class="mt-4 d-flex justify-content-center">Product</h1> -->

    <div class="container justify-content-center d-flex">
        <div class="card-header">
            <i class="fas fa-table me-1">Product</i>

            <a class="btn btn-info" href="{{route('products.index')}}">List</a>

        </div>
        <form action="{{route('products.update',['product'=>$product->id])}}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <x-backend.form.input name="name" :value="$product->name"/>
                <x-backend.form.input name="price" :value="$product->price"/>
                <x-backend.form.input name="category_name" :value="$product->category_name"/>
                <x-backend.form.input name="brand_name" :value="$product->brand_name"/>
                <x-backend.form.input name="description" :value="$product->description"/>
              
                <x-backend.form.input name="image" type="file" :value="$product->image"/>
                <img src="/storage/{{$product->image}}"/>
                <input type="checkbox" name="status" value="1"{{$product->status?"checkded":"unchecked"}}>
                <x-backend.form.button>
                    update
                </x-backend.form.button>

        </form>

    </div>

</x-backend.layouts.master>