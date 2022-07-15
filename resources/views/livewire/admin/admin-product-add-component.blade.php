<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="add">

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Product Name" autofocus wire:model="name" wire:keyup="generateSlug()">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Product slug</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Product slug" wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Short Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" name="" id="" placeholder="Short Description" wire:model="short_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Description" name="" id="" cols="30" rows="10" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Regular Price</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control input-md" placeholder="Regular Price" wire:model="regular_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Sale Price</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control input-md" placeholder="Sale Price" wire:model="sale_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Stock</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="stock_status">
                                        <option value="instock">In Stock</option>
                                        <option value="outofstock">Out Of Stock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Featured</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="featured">
                                        <option value="0">NO</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Quantity" wire:model="quantity">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{ $image->temporaryUrl() }}" alt="" width="134">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Category</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>

                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4"></label>
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
