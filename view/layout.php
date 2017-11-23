<html>
    <head></head>
    <body>
        <header>
            <h5>The System Of The XYZ Wears Selling Website </h5>
            <?php
            if (isset($_SESSION['username'])) {
                echo $_SESSION['username'] . ' ,';
                echo "<a href='index.php?controller=profile&action=display'> Profile </a>";
                echo "<a href='index.php?controller=logout&action=logout'>Logout</a>";
            }
            if (isset($_SESSION['message'])) {
                echo "<br> Message: ";
                echo $_SESSION['message'];
            }
            echo "<br>_____________________________________________________________";
            ?>
        </header>
        <?php require_once('translate.php') ?>
        <footer>
            <?php 
            echo "<br>_____________________________________________________________";
            ?>
            <h5>The copyright belongs to group 04 ICT K59</h5>
        </footer>
    </body>
</html>