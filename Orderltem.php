<?php
namespace Order_management\Order_management;

require_once(realpath(dirname(__FILE__)) . '/../Order_management/Order_management/Order.php');

use Order_management\Order_management\Order;

/**
 * @access public
 * @author M.S.I
 * @package Order_management\Order_management
 */
class OrderItem {

    /**
     * @AttributeType Order_management\Order_management\Order
     * @AssociationType Order_management\Order_management\Order
     */
    public $_order;

    // Attribute: Book ID
    public $bookID;

    // Attribute: Quantity
    public $quantity;

    // Attribute: Price per unit
    public $unitPrice;

    // Function: Constructor to initialize item
    public function __construct($bookID, $quantity, $unitPrice) {
        $this->bookID = $bookID;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
    }

    // Function: Calculate total price
    public function calculateTotal() {
        return $this->quantity * $this->unitPrice;
    }

    // Function: Display item details
    public function displayItem() {
        return "Book ID: {$this->bookID}, Quantity: {$this->quantity}, Unit Price: {$this->unitPrice}, Total: " . $this->calculateTotal();
    }
}
?>