<!DOCTYPE html>
<html lang='en'>
<head>
    <title>ECOMM</title>
</head>
<body>

    <div class='container'>
        <h2>Products</h2>
        <a href='#'>Your Cart</a>

        <table>
            <thead>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
            </thead>
            <tbody>
                <tr>
                    <td>Dojo Shirt</td>
                    <td>$19.99</td>
                    <td>
                        <form action="">
                            <input type='number' id='quantity' min='1' max='5'>
                            <input type='submit' value='Buy Now'>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Dojo Cups</td>
                    <td>$39.99</td>
                    <td>
                        <form>
                            <input type='number' id='quantity' min='1' max='5'>
                            <input type='submit' value='Buy Now'>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <h2>Billing Info</h2>
        <form action="">
            Name: <input type='text' name='name' value='Name'><br><br>
            Address: <input type='text' name='address' value='Address'><br><br>
            Card #: <input type='text' name='card' value='Card #'>
        </form>
    </div>

</body>
</html>