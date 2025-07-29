<?php
trait timeStamp {
    public function getCurrentTimestamp() {
        return date("Y-m-d H:i:s");
    }
}
class order{
    use timeStamp;
}
class invoice{
    use timeStamp;
}
$order = new order();
$invoice = new invoice();
echo "Order Timestamp: " . $order->getCurrentTimestamp() . "<br>";
echo "Invoice Timestamp: " . $invoice->getCurrentTimestamp() . "<br>";