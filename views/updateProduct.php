<div class="card">
    <form action="/processUpdate" method="post">
        <input type="hidden" name="product_id" value="<?php echo $params->product_id ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Prodcut</p>
                <button class="btn btn-primary btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Prodcut Information</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Description</label>
                        <input class="form-control" type="text" name="description" value="<?php echo $params->description ?>"
                               onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $params->name ?>"
                               onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
