<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="d-ib">Change Password</span>
            </h1>
        </div>

        <div class="row gutter-xs">
            <div class="col-md-6 col-lg-6 ">
                <?php if(isset($errors)){?>
                    <div class="alert alert-danger">
                        <h4>Errors!</h4>
                        <?php print_r($errors);?>
                    </div>
                <?php }?>
                <?php if(isset($success)){?>
                    <div class="alert alert-success">
                        <h4>Congratulations!</h4>
                        <?php print_r($success);?>
                    </div>
                <?php }?>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" class="form-control" name="old_password"/>
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="password"/>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="conf_password" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        <a href="<?php echo base_url().'user'?>" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>