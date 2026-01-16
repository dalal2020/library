<?php
namespace Order_management\Order_management;

require_once(realpath(dirname(__FILE__)) . '/../Order_management/Order_management/Order.php');

use Order_management\Order_management\Order;

/**
 * @access public
 * @author M.S.I
 * @package Order_management\Order_management
 */
class Payment {

    /**
     * @AttributeType Order_management\Order_management\Order
     * @AssociationType Order_management\Order_management\Order
     */
    public $_order;

    // Attribute: Payment ID
    public $paymentID;

    // Attribute: Payment method
    public $method;

    // Attribute: Payment status
    public $status;

    // Function: Constructor to initialize payment
    public function __construct($paymentID, $method, $status) {
        $this->paymentID = $paymentID;
        $this->method = $method;
        $this->status = $status;
    }

    // Function: Display payment details
    public function displayPayment() {
        return "Payment ID: {$this->paymentID}, Method: {$this->method}, Status: {$this->status}";
    }

    // Function: Update payment status
    public function updateStatus($newStatus) {
        $this->status = $newStatus;
        return "Payment status updated to {$newStatus}";
    }
}
?>