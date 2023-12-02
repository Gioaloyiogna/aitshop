<div class="modal fade" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="add-product-form">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <label for="">Product Tag *</label>
                            <input type="text" id="add-department" class="form-control form-control-sm"
                                placeholder="" name="productTag" required>
                        </div>
                        <div class="row">
                            <label for="">Product Name *</label>
                            <input type="text" id="add-department" class="form-control form-control-sm"
                                placeholder="" name="productName" required>
                        </div>
                        <div class="row">
                            <label for="">Product Image *</label>
                            <input type="file" id="add-department" class="form-control form-control-sm"
                                placeholder="" name="produtImage" required>
                        </div>
                        <div class="row">
                            <label for="">Product Description *</label>
                            <input type="text" id="add-department" class="form-control form-control-sm"
                                placeholder="" name="productDescription" required>
                        </div>
                        <div class="row">
                            <label for="">Product Price *</label>
                            <input type="number" id="add-department" class="form-control form-control-sm"
                                placeholder="" name="productPrice" required>
                        </div>
                        <div class="row">
                            <label for="">Category *</label>
                            <input type="text" id="add-department" class="form-control form-control-sm"
                                placeholder="" name="productCategory" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-light">Reset</button>
                <button class="btn btn-primary" form="add-product-form" type="submit">Save</button>
            </div>
        </div>
    </div>
</div>
