<?php include 'header.php';?>

<?php

if ($_POST) {
    $name = $_POST["user"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $handle = fopen("comments.html", "a");
    fwrite($handle, "User: <b>" . $name . "</b></br>");
    fwrite($handle, "Email: <b>" . $email . "</b></br>");
    fwrite($handle, "Comment: <b>" . $comment . "</b></br><hr>");
    fclose($handle);
}

?>

<div class="container" style="margin-top:20px;">
    <form action="" method="POST">

        <p>User</p>
        <input type="text" name="user" style="background:#ddd;">

        <p>Email</p>
        <input type="email" name="email" style="background:#ddd;">

        <p>Comment</p>
        <textarea name="comment" rows="10" style="background:#ddd; width:200px;"></textarea>

        <p><input type="submit" value="Comment" style="background:#ff9ff3;"></p>

    </form>

    <h2>Comments</h2>
    <?php include "comments.html"; ?>
</div>

<?php include 'footer.php';?>