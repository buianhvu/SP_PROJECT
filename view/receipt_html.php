<html>
    <div class="row">
    <h3>Receipt  Of Products</h3>
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>
                Product Name
            </td>
            <td>
                Amount For Each Item
            </td>
            <td>
                Quantity
            </td>
            <td>
                Sum
            </td>
                    
        </tr>
        <?php 
        $count = $_POST['num'];
        $total_amount = 0;
        for($i = 1; $i < $count + 1; $i++){
        echo "<tr>";
        echo "<td>";
        echo $_POST['item_name_'.$i];
        echo "</td>";
        echo "<td>";
        echo $_POST['amount_'.$i];
        echo "</td>";
        echo "<td>";
        echo $_POST['quantity_'.$i];
        echo "</td>";
        echo "<td>";
        echo $_POST['amount_'.$i] * $_POST['quantity_'.$i];
        echo "</td>";
        echo "</tr>";
        $total_amount = $_POST['amount_'.$i] * $_POST['quantity_'.$i];
        $_SESSION['total_amount'] = $total_amount;
        }
        echo "<tr>";
        echo "<td>";
        echo 'Total: ';
        echo "</td>";
        echo "<td>";
        echo "</td>";
        echo "<td>";
        echo "</td>";
        echo "<td>";
        echo $total_amount;
        echo "</td>";
        echo "</tr>";
        ?>
    </table>
    </div>
</html>

