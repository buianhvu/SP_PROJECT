<html>
    <head></head>
    <body>
        <header>
            
            <?php
            if (isset($_SESSION['username'])) {
                echo "<a href='index.php?controller=product&action=display'> <h5>The System Of The XYZ Wears Selling Website </h5> </a>";
                echo $_SESSION['username'] . ' ,';
                echo "<a href='index.php?controller=profile&action=display'> Profile </a>";
                echo "<a href='index.php?controller=logout&action=logout' style='margin-left: 10px'> Logout</a>";
            }
            if (isset($_SESSION['message'])) {
                echo "<br> Message: ";
                echo $_SESSION['message'];
            }
            echo "<br>_____________________________________________________________";
            ?>
        </header>
        <?php
        if (isset($_SESSION['username'])) {
            require_once('view/searchbox_html.php');
        }
        ?>
        <?php require_once('translate.php') ?>
        <footer>
            <?php
            echo "<br>_____________________________________________________________";
            ?>
            <h5>The copyright belongs to group 04 ICT K59</h5>
        </footer>
    </body>
</html>