<!DOCTYPE html>
<html lang="en">
<head >
    <title><?php echo $title?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"  crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>


</head>
<body>

<div class="container-fluid slider" id="about" >
    <div style="margin:0 auto; text-align: center;"
        class="image-profile"></div>
    <div class="jumbotron" style="margin-top: 0px; margin-left: 150px; margin-right:150px; opacity: 2.5;">
        <h2 class="hero"><?php echo $user['user']['name']?> </h2>
        <p style="text-align: center; "><?php if(!empty($user['about'])) {echo substr($user['about'],0,100);}?></p>
    </div>
</div>
<section id="experience" data-id="experience">
    <div class="container">
        <div style="box-shadow: 5px 5px 5px grey; background-color: orangered; color: #fff; text-shadow: 2px 2px 2px grey; padding: 1px;"><h2>Experience</h2></div>
        <div class="col-md-12">
            <?php if(!empty($user['experience'])){ echo $user['experience'];} ?>
        </div>
    </div>
</section>
<section id="education" data-id="education">
    <div class="container">
        <div style="box-shadow: 5px 5px 5px grey; background-color: orangered; color: #fff; text-shadow: 2px 2px 2px grey; padding: 1px;"><h2>Education</h2></div>
        <div class="col-md-12">
            <?php if(!empty($user['education'])){ echo $user['education'];}?>
        </div>
    </div>
</section>
<section id="hobbies" data-id="hobbies">
    <div class="container">
        <div style="box-shadow: 5px 5px 5px grey; background-color: orangered; color: #fff; text-shadow: 2px 2px 2px grey; padding: 1px;"><h2>Hobbies and Passion</h2></div>
        <?php if(!empty($user['hobbies'])){ ?>
            <div class="col-md-12">
                <h3>Hobbies</h3>
                <?php echo $user['hobbies']; ?>
            </div>
        <?php }?>
        <?php if(!empty($user['passions'])){?>
            <div class="col-md-12">
                <h3>Passion</h3>
                <?php echo $user['passions'];?>
            </div>
        <?php }?>
        <?php if(!empty($user['communities'])){ ?>
            <div class="col-md-12">
                <h3>Communities</h3>
                <?php echo $user['communities'];?>
            </div>
        <?php }?>
        <?php if(!empty($user['awards'])){?>
            <div class="col-md-12">
                <h3>Awards</h3>
                <?php echo $user['awards'];?>
            </div>
        <?php }?>
    </div>
</section>

</body>
</html>

<style>
    <?php
        if(!isset($user['header']))
            {
                $user['header']='b_img1';
            }
        if(!isset($user['image']))
        {
            $user['image']='avatar.png';
        }
    ?>
    .slider {
        background: url("<?php echo base_url().'images/'.$user['header']?>.jpg") no-repeat center center fixed;
        background-size: cover;
        height: 450px;
    }
    .image-profile {
        background: url("<?php echo base_url().'uploads/'.$user['image']?>") no-repeat center top ;
        border-radius: 90px;
        height: 200px;
        width: 200px;
    }
    .hero {
        color: #800000;
        text-align: center;
        font-family: 'Arial';
        text-shadow: 5px 5px 5px white;
    }
    .jumbotron {
        background: rgb(200, 54, 54); /* This is for ie8 and below */
        background: rgba(255, 255, 255, 0.5);
        color: #fff;
        text-shadow: 2px 2px 1px #000;
        text-align: center;
    }
    section {
        margin-top: 20px;
        border-bottom: 1px dotted #808080;
    }
</style>