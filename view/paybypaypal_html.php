<!DOCTYPE html>
<html>
    <head>
        <title>PaymentByPayPal</title>
    </head>
    <body>

        <div class="row">
            <h3>Payment by PayPal</h3>
            <h3>Please fulfill all the fields to complete your payment</h3>
            <h4>Note: Auto direct to Payment by Paypal if total amount is larger than $100</h4>
            <form action = "index.php?controller=payment&action=add_order" method="get" >
                <input type="hidden" name="controller" value="payment" />
                <input type="hidden" name="action" value="complete_order" />
                <table cellpadding="0" cellspacing="0" border="1">
                    <tr>
                        <td>
                            Paypal Code
                        </td>
                        <td>
                            <input type="text" name="card_number" size="50" />
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


