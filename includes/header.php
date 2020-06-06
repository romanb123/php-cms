<?php include('database/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cms</title>
</head>
<style>
<?php include('style/style.css')?>
</style>

<body>
    <div class="fixed-navbar">
        <nav class="navbar">
            <div class="navbar__logo">
                <span class="navbar__logo__text">logo</span>
            </div>
            <ul class="navbar__ul">
                <?php 
                $sql = "SELECT * FROM categories";
                $result = $conn->query($sql);
                foreach ($result as $value) {
                    $title=$value["title"];
               echo "<li class='navbar__ul__li'><a class='navbar__ul__li__link' href='#'>{$title}</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</body>

</html>