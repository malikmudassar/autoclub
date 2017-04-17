<script>
    function show(no)
    {
        $('#uploadImage'+no).trigger('click');
    }
    function previewImage(no)
    {
        $('.ad_pic'+no).hide();
        $('#imgshow'+no).show();
        var obj = new FileReader();
        obj.readAsDataURL(document.getElementById('uploadImage'+no).files[0]);
        obj.onload = function(OfEVENT){
            document.getElementById('imgshow'+no).src = OfEVENT.target.result;
            $('imgshow'+no).css('cursor','pointer','color','blue');
        }
    }
</script>

<div class="layout-content">
    <div class="layout-content-body">
        <div class="col-md-4">
            <h2>Profile Image</h2><hr>
            <div class="login-body">
                <?php if(isset($errors)){?>
                    <div class="alert alert-danger">
                        <?php print_r($errors);?>
                    </div>
                <?php }?>
                <?php if(isset($success)){?>
                    <div class="alert alert-success">
                        <?php print_r($success);?>
                    </div>
                <?php }?>
                <div class="login-form">
                    <?php if(isset($error)){echo $error;}?>
                    <?php echo form_open_multipart('User/do_upload');?>
                    <div class="form-group">
                        <img style="cursor:pointer" src="<?php if(isset($pic->image)){ echo(base_url()) ?>uploads/<?php echo ($pic->image);  }else{ echo(base_url()) ?>assets/img/no-image.jpg <?php } ?>" width="150px" height="120px" onClick="show(1)" id="imgshow1" />
                        <div class="ads_image ad_pic1">
                            <input type="file" style="display:none" id="uploadImage1" name="userfile1" multiple onChange="previewImage(1)"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Upload Image" />
                        <a href="<?php echo base_url().'user/picture'; ?>" class="btn btn-primary"> Cancel </a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




