<div class="card">
    <form action="/processCreateUser" method="post">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Create new user</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Create</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">User Information</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email address</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $params->email ?>"
                               onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                            $form = new \app\core\Form();
                            $form->valid($params,"email");
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">First name</label>
                        <input class="form-control" type="text" name="first_name" value="<?php echo $params->first_name ?>"
                               onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                            $form->valid($params,"first_name");
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Last name</label>
                        <input class="form-control" type="text" name="last_name" value="<?php echo $params->last_name ?>"
                               onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                            $form->valid($params,"last_name");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
