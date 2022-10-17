<div class="modal" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">
                    Add Sales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                {{--    <p> You are now able to edit this information</p> --}}

                <form action="{{ route('admin.sale.store') }} " method="POST">
                    @csrf


                        <div class="row g-3 mb-2">

                            <div class="col-md-6">
                                <label for="product_name" class="text-dark text-black font-weight-bold">Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name"
                                    placeholder="Product name" value="">
                            </div>
                            <div class="col-md-6">
                                <label for="brand_name" class="text-dark text-black font-weight-bold">Brand</label>
                                <input type="text" class="form-control" name="brand_name" id="brand_name"
                                    placeholder="Brand" value="">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="category_id" class="text-dark text-black font-weight-bold">Category</label>
                                <select class="form-select @error('category_id') is-invalid @enderror"
                                    aria-label="Default select example"name="category_id" wire:model='category_id'>
                                    <option selected>Selecet Category</option>
                                    <option value="Food">Food</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Products">Products</option>
                                    <option value="Vaccines">Vaccines</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="text-dark text-black font-weight-bold">Date</label>
                                <input type="date" class="form-control" name="date" id="date"
                                    placeholder="Date" value="">
                            </div>
                        </div>



                        <div class="row g-3 mb-3">

                            <div class="col-md-6">
                                <label for="price" class="text-dark text-black font-weight-bold">Price</label>
                                <input type="number" class="form-control" name="price" id="price"
                                    placeholder="Price" value="">
                            </div>
                            <div class="col-md-6">
                                <label for="stock" class="text-dark text-black font-weight-bold">Initial Stocks</label>
                                <input type="number" class="form-control" name="stock" id="stock"
                                    placeholder="Initial Stock" value="">
                            </div>
                        </div>


                        <div class="row g-3 mb-3">

                            <div class="col-md-4">
                                <label for="sold" class="text-dark text-black font-weight-bold">Stock Sold</label>
                                <input type="number" class="form-control" name="sold" id="sold"
                                    placeholder="Sold" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="remain" class="text-dark text-black font-weight-bold">Stock Remain</label>
                                <input type="number" class="form-control" name="remain" id="remain"
                                    placeholder="Stock Remain" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="sale" class="text-dark text-black font-weight-bold">Sales</label>
                                <input type="number" class="form-control" name="sale" id="sale"
                                    placeholder="Sales" value="">
                            </div>
                        </div>



                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success data-bs-dismiss="modal"">Add</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
