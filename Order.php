<?php
namespace Order_management\Order_management;

require_once(realpath(dirname(__FILE__)) . '/../..//Order_management/Order_management/OrderItem.php');
require_once(realpath(dirname(__FILE__)) . '/../..//Order_management/Order_management/Payment.php');
require_once(realpath(dirname(__FILE__)) . '/../..//Order_management/Order_management/Invoice.php');

use Order_management\Order_management\OrderItem;
use Order_management\Order_management\Payment;
use Order_management\Order_management\Invoice;

/**
 * @access public
 * @author M.S.I
 * @package Order_management\Order_management
 */
class Order {

    /**
     * @AttributeType Order_management\Order_management\OrderItem
     * @AssociationType Order_management\Order_management\OrderItem
     * @AssociationKind Aggregation
     */
    public $_anOrderItem;

    /**
     * @AttributeType Order_management\Order_management\Payment
     * @AssociationType Order_management\Order_management\Payment
     */
    public $_anPayment;

    /**
     * @AttributeType Order_management\Order_management\Invoice
     * @AssociationType Order_management\Order_management\Invoice
     */
    public $_anInvoice;

    // Attribute: Order ID
    public $orderID;

    // Attribute: Customer ID
    public $customerID;

    // Attribute: Order date
    public $orderDate;

    // Function: Constructor to initialize order
    public function __construct($orderID, $customerID, $orderDate) {
        $this->orderID = $orderID;
        $this->customerID = $customerID;
        $this->orderDate = $orderDate;
    }

    // Function: Display order details
    public function displayOrder() {
        return "Order ID: {$this->orderID}, Customer ID: {$this->customerID}, Date: {$this->orderDate}";
    }

    // Function: Update order date
    public function updateOrderDate($newDate) {
        $this->orderDate = $newDate;
        return "Order date updated to {$newDate}";
    }
}
?>