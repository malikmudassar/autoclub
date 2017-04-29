<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="d-ib">My Updates</span>
            </h1>
        </div>
        <?php if(count($updates)>0){?>
            <div class="row gutter-xs">
                <div class="col-md-6 col-lg-6 ">
                </div>
            </div>
        <?php } else {?>
            <div class="alert alert-warning">
                <p>There are no active updates yet.</p>
            </div>
        <?php }?>
    </div>
</div>