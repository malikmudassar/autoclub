<div class="layout-content">
    <div class="layout-content-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="demo-dynamic-tables-2" class="table table-middle nowrap">
                                <thead>
                                <tr>
                                    <th>Sr. #</th>
                                    <th>Name</th>
                                    <th>Refer ID</th>
                                    <th>Email</th>
                                    <th>Contact #</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php for($i=0;$i<count($users);$i++){?>
                                    <tr>
                                        <td class="maw-320">
                                            <strong><?php echo $i+1;?></strong>
                                        </td>
                                        <td class="maw-320">
                                            <span class="truncate"><?php echo $users[$i]['name']?></span>
                                        </td>
                                        <td><?php echo $users[$i]['refer_id']?></td>
                                        <td><?php echo $users[$i]['email']?></td>
                                        <td><?php echo $users[$i]['phone']?></td>
                                        <td>
                                            <a href="<?php echo base_url().'admin/edit_manager/'.$users[$i]['id'];?>" class="btn btn-default" title="Edit"><i class="icon icon-pencil"></i></a>
                                            <a href="<?php echo base_url().'admin/suspendUser/'.$users[$i]['id']?>" class="btn btn-danger" title="Suspend"><i class="icon icon-times"></i></a>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
