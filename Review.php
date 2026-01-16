<?php
namespace Review_management\Review_management;

require_once(realpath(dirname(__FILE__)) . '/../User_management/User_management/Customer.php');
require_once(realpath(dirname(__FILE__)) . '/../Review_management/Review_management/Rating.php');

use User_management\User_management\Customer;
use Review_management\Review_management\Rating;

/**
 * @access public
 * @author M.S.I
 * @package Review_management\Review_management
 */
class Review {

    // Attribute: Associated customer
    public $_customer;

    // Attribute: Associated rating
    public $_rating;

    // Attribute: Review comment
    public $comment;

    // Attribute: Book ID
    public $bookID;

    // Function: Constructor to initialize review
    public function __construct($bookID, $customer, $rating, $comment) {
        $this->bookID = $bookID;
        $this->_customer = $customer;
        $this->_rating = $rating;
        $this->comment = $comment;
    }

    // Function: Display review details
    public function displayReview() {
        return "Book ID: {$this->bookID}, Customer: {$this->_customer->userID}, Rating: {$this->_rating->value}, Comment: {$this->comment}";
    }

    // Function: Update comment
    public function updateComment($newComment) {
        $this->comment = $newComment;
        return "Comment updated";
    }
}
?>