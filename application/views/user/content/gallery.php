<div class="layout-content">
    <div class="layout-content-body">
        <div class="row">
            <?php for($i=0;$i<6;$i++){?>
            <div class="col-md-4 col-sm-12 col-lg-4 img-thumb" >
                <img src="<?php echo base_url().'images/t_img'.($i+1)?>.jpg" style="width: 350px; height: 238px;">

            </div>
            <?php }?>
        </div>
    </div>
</div>
<style>
    .img-thumb {
        border: 1px solid #d3d3d3;
        padding: 10px;
        min-height: 278px;
    }
</style>




