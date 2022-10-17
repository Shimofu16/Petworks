<div class="modal" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">
                    Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                {{--    <p> You are now able to edit this information</p> --}}

                <form action="{{ route('admin.category.store') }} " method="POST">
                    @csrf


                    <div class="row g-3 mb-2">
                        <div class="col-md-12">
                            <label for="category_name" class="text-dark text-black font-weight-bold">Category</label>
                            <input type="text" class="form-control" name="category_name" id="category_name"
                                placeholder="Category" value="">
                        </div>



                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>




                </form>
            </div>
        </div>
    </div>
</div>
