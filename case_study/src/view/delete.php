<form method="post" action="index.php?page=delete&id=<?php echo $library['bookNumber']?>">
    <h3 class="alert-danger">do you want delete <?php echo $library['bookName'] ?></h3>
    <div>
        <button type="submit" class="btn btn-outline-success">OK</button>
        <a href="index.php">
            <button type="button" class="btn btn-outline-success">CANCEL</button>
        </a>

    </div>

</form>
