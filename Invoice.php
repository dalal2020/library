<?php
namespace Order_management\Order_management;

require_once(realpath(dirname(__FILE__) . '/../../../Order_management/order_management/Order.php'));

use Order_management\Order_management\Order;

/**
 * @access public
 * @author M.S.I
 * @package Order_management\Order_management
 */
class Invoice {

    // Attribute: Associated order
    public $_order;

    // Attribute: Invoice ID
    public $invoiceID;

    // Attribute: Total amount
    public $totalAmount;

    // Function: Constructor to initialize invoice
    public function __construct($invoiceID, $order, $totalAmount) {
        $this->invoiceID = $invoiceID;
        $this->_order = $order;
        $this->totalAmount = $totalAmount;
    }

    // Function: Display invoice details
    public function displayInvoice() {
        return "Invoice ID: {$this->invoiceID}, Order ID: {$this->_order->orderID}, Total: {$this->totalAmount}";
    }

    // Function: Update total amount
    public function updateTotal($newTotal) {
        $this->totalAmount = $newTotal;
        return "Total amount updated to {$newTotal}";
    }
}
?>