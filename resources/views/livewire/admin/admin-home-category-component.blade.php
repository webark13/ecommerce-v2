<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Categories
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory">

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Choose Categories</label>
                                <div class="col-md-4" wire:ignore>
                                    <select class="sel_categories form-control" name="categories[]" id="" multiple="mulitiple" wire:model="selected_categories">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">No Of Products</label>
                                <div class="col-md-4">
                                    <input type="text" class="col-md-4 input-md" wire:model="number_of_products">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input type="submit" name="" id="" class="btn btn-primary" value="Save">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(functiion(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change', functiion(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories', data);
            })
        });

        // $(document).ready(function(){
        //     $('.sel_categories').select2({
        //         multiple:true
        //     });
        // })
    </script>
@endpush