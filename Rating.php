<?php
namespace Review_management\Review_management;

require_once(realpath(dirname(__FILE__)) . '/../Review_management/Review_management/Review.php');

use Review_management\Review_management\Review;

/**
 * @access public
 * @author M.S.I
 * @package Review_management\Review_management
 */
class Rating {

    // Attribute: Associated review
    public $_review;

    // Attribute: Rating value
    public $value;

    // Function: Constructor to initialize rating
    public function __construct($review, $value) {
        $this->_review = $review;
        $this->value = $value;
    }

    // Function: Display rating details
    public function displayRating() {
        return "Review ID: {$this->_review->reviewID}, Rating: {$this->value}";
    }

    // Function: Update rating value
    public function updateRating($newValue) {
        $this->value = $newValue;
        return "Rating updated to {$newValue}";
    }
}
?>