<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 4/8/2017
 * Time: 4:14 PM
 */
function printChild($data)
{

}
?>
<body>
<div class="container">

<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu<span class="caret"></span></button>
        <ul class="dropdown-menu">
            <?php for($i=0;$i<count($menu);$i++){?>
                <?php if(!empty($menu[$i]['child'])){?>
                    <li class="dropdown-submenu">
                        <a class="test" href="#"><?php echo $menu[$i]['name']?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php for($j=0;$j<count($menu[$i]['child']);$j++){?>
                                <li><a href="#"><?php echo $menu[$i]['child'][$j]['name']?></a></li>
                            <?php }?>
                        </ul>
                    </li>
                <?php }else{?>
                    <li><a tabindex="-1" href="#"><?php echo $menu[$i]['name']?></a></li>
            <?php }}?>
        </ul>
</div>
</div>
</body>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>