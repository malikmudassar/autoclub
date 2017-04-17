<div class="layout-content">
    <div class="layout-content-body">
        <?php if(isset($success)){?>
            <div class="alert alert-success">
                <?php print_r($success);?>
            </div>
        <?php }?>
        <form action="" method="post">
        <?php for($i=0;$i<6;$i++){?>
            <div class="col-md-4 col-sm-12 col-lg-4 img-thumb" >
                <img src="<?php echo base_url().'images/t_img'.($i+1)?>.jpg" style="width: 350px; height: 238px;">
                <input type="radio" name="img[]" value="b_img<?php echo $i+1;?>" <?php if($header->image=='b_img'.($i+1)) { echo 'checked';}?> /> Choose Image
            </div>
        <?php }?>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

        </form>

    </div>
</div>
<style>
    .img-thumb {
        border: 1px solid #d3d3d3;
        padding: 10px;
        min-height: 278px;
    }
</style>