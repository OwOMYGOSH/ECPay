<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
</head>
<body>
    <form method="post">
        @csrf
        <label for="MerchantID">MerchantID: </label>
        <input type="text" id="MerchantID" name="MerchantID"><p>
        <label for="MerchantTradeNo">MerchantTradeNo: </label>
        <input type="text" id="MerchantTradeNo" name="MerchantTradeNo"><p>
        <label for="MerchantTradeDate">MerchantTradeDate: </label>
        <input type="text" id="MerchantTradeDate" name="MerchantTradeDate"><p>
        <label for="TotalAmount">TotalAmount: </label>
        <input type="text" id="TotalAmount" name="TotalAmount"><p>
        <label for="TradeDesc">TradeDesc: </label>
        <input type="text" id="TradeDesc" name="TradeDesc"><p>
        <label for="ItemName">ItemName: </label>
        <input type="text" id="ItemName" name="ItemName"><p>

        <button type="submit">Submit</button>
    </form>
</body>
</html>