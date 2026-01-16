<?php
namespace User_management\User_management;

require_once(realpath(dirname(_FILE_) . '/../Review_management/Review_management/Review.php'));
require_once(realpath(dirname(_FILE) . '/../User_management/User_management/User.php'));

use Review_management\Review_management\Review;
use User_management\User_management\User_;

/**
 * @access public
 * @author M.S.I
 * @package User_management\User_management
 */
class Customer extends User_ {

    // Attribute: Review association
    public $_anReview;

    // Attribute: Purchase history
    public $purchaseHistory = [];

    // Function: Write a review
    public function writeReview($bookID, $rating, $comment) {
        $review = new Review($bookID, $this->userID, $rating, $comment);
        $this->_anReview = $review;
        return "Review submitted";
    }

    // Function: View purchase history
    public function viewPurchaseHistory() {
        return $this->purchaseHistory;
    }

    // Function: Add a new purchase
    public function addPurchase($bookID) {
        $this->purchaseHistory[] = $bookID;
    }
}
?>