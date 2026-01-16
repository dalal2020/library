<?php

namespace Book_management\Book_management;

require_once(realpath(dirname(__FILE__) . '/../../Book_management/Book_management/Category.php'));
require_once(realpath(dirname(__FILE__) . '/../../Book_management/Book_management/Author.php'));

use Book_management\Book_management\Category;
use Book_management\Book_management\Author;

/**
 * @access public
 * @author M.S.I
 * @package Book_management\Book_management
 */
class Book {

    /**
     * @AttributeType Book_management\Book_management\Category
     * @AssociationType Book_management\Book_management\Category
     * @AssociationKind Aggregation
     */
    public $_category;

    /**
     * @AttributeType Book_management\Book_management\Author
     * @AssociationType Book_management\Book_management\Author
     * @AssociationKind Aggregation
     */
    public $_author;

    // Attribute: Book title
    public $title;

    // Attribute: Price
    public $price;

    // Attribute: Quantity
    public $quantity;

    // Function: Constructor to initialize book
    public function __construct($title, $price, $quantity, $category, $author) {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->_category = $category;
        $this->_author = $author;
    }

    // Function: Display book details
    public function displayBook() {
        return "Title: {$this->title}, Price: {$this->price}, Quantity: {$this->quantity}";
    }

    // Function: Update quantity
    public function updateQuantity($newQuantity) {
        $this->quantity = $newQuantity;
        return "Quantity updated to {$newQuantity}";
    }
}
?>