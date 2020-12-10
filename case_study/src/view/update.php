<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-image: url("img/.jpg");
        }
    </style>
</head>
<body>
<div>
    <a href="index.php?page=list-library">Home</a>
</div>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <form enctype="multipart/form-data" action="index.php?page=update&id=<?php echo $BookDetail[0]['bookNumber']  ?>" method="post">


                <div class="form-group">
                    <label class="form-group">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $BookDetail[0]['bookName']  ?>">
                </div>

                <div class="form-group">
                    <label class="form-group">author</label>
                    <input type="text" class="form-control" name="author" value="<?php echo $BookDetail[0]['author']  ?>">
                </div>

                <div class="form-group">
                    <label class="form-group">comment</label>
                    <input type="file" class="form-control" name="img" value="<?php echo $BookDetail[0]['img']  ?>">
                </div>

                <div class="form-group">
                    <label class="form-group">describe</label>
                    <textarea type="text" class="form-control" name="describes" ><?php echo $BookDetail[0]['describes']  ?></textarea>
                </div>

                <div>
                    <button type="submit" class="btn-outline-success">UPDATE</button>
                </div>
            </form>
        </div>

    </div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

