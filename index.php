<?php
require_once "includes/header.php"
?>


<div class="main">
    <h1>Kualitas Air</h1>
    <form action="search.php" method="POST">
        <input type="text" name="search_bar" placeholder="Search">
        <button class="button" type="submit" name="submit">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>




<?php 
require_once "includes/footer.php";
?>
