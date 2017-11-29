<!DOCTYPE html>
<html>
    <head>
        <title>PaymentByCC</title>
    </head>
    <body>

        <div class="row">
            <h5>Payment by Credit Card</h5>
            <h5>Please fulfill all the fields to complete your payment</h5>
            Note: auto apply Payment by credit card if total amount is smaller than $100
            <form action = "index.php" method="get" >
                <input type="hidden" name="controller" value="payment" />
                <input type="hidden" name="action" value="complete_order" />
                <table cellpadding="0" cellspacing="0" border="1">
                    <tr>
                        <td>
                            Full name
                        </td>
                        <td>
                            <input type="text" name="txtFullname" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Credit Card Number
                        </td>
                        <td>
                            <input type="password" name="txtPassword" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Credit Card Type
                        </td>
                        <td>
                            <input type="password" name="txtPassword" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Expired Date
                        </td>
                        <td>
                            <input type="text" name="txtEmail" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            <input type="submit" name="txtEmail" size="50" />
                        </td>
                    </tr>

                </table>
            </form>

        </div>

    </body>
</html>

