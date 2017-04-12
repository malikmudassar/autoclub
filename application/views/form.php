<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title><?php echo $title;?></title>
</head>
<body>

    <div class="container">
        <div class="col-md-3" style="box-shadow: 2px 2px 2px grey">
            <form action="" method="post" id="form1">
                <div class="form-group">
                    <label > Upload 1</label>
                    <input type="file" name="file1" >
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger" onclick="submitOne()">Upload Image1</button>
                </div>
            </form>
        </div>
        <div class="col-md-3" style="box-shadow: 2px 2px 2px grey">
            <form action="" method="post" id="form2">
                <div class="form-group">
                    <label > Upload 2</label>
                    <input type="file" name="file1" >
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger" onclick="submitTwo()">Upload Image2</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script>
    function submitOne()
    {
        alert('form1 will be submitted')
        $('#form1').submit();
    }
    function submitTwo()
    {
        alert('form2 will be submitted')
        $('#form2').submit();
    }
</script>