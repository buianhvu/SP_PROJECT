<html>
    <head></head>
    <body>
        <header>
            <h5>The System Of The XYZ Wears Selling Website </h5>
            <?php 
            if (isset($_SESSION['username'])){
                echo $_SESSION['username'].' ,';
                echo "<a href='index.php?controller=logout&action=handle'>Logout</a>";
            }
            ?>
        </header>
        <?php require_once('translate.php') ?>
        <footer>
            <h5>The copyright belongs to group 04 ICT K59</h5>
        </footer>
    </body>
</html>