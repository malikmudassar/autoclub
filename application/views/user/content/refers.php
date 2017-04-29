<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="d-ib">My Referred Family</span>
            </h1>
        </div>
        <?php if(count($refers)>0){?>
        <div class="row gutter-xs">
            <div class="col-md-6 col-lg-6 ">
                <table class="table table-stripped table-hover">
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Phone</th>
                    </tr>
                    <?php for($i=0;$i<count($refers);$i++){?>
                    <tr>
                        <td><?php echo $i+1;?></td>
                        <td><?php echo $refers[$i]['name']?></td>
                        <td><?php echo $refers[$i]['phone']?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <?php } else {?>
            <div class="alert alert-warning">
                <p>You have not referred anyone yet.</p>
            </div>
        <?php }?>
    </div>
</div>