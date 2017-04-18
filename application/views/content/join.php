<section id="hotels" class="parallax">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
                    <div class="wow fadeInUp section-title" data-wow-delay="1s">
                        <h2>Your Details Please<small></small></h2>
                    </div>
                    <?php
                    if(isset($errors)) {
                        ?>
                        <div class="alert alert-danger">
                            <?php print_r($errors);?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($success)) {
                        ?>
                        <div class="alert alert-success">
                            <?php print_r($success);?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="col-md-12" style="text-align: left">
                        <form action="" method="post">
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="conf_password" required>
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label>Referal ID</label>
                                <input type="text" class="form-control" name="refer_id" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-capsul btn-lg"> Let me In!  </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- iso section -->


            </div>

        </div>
    </div>
</section>