<?php
namespace Book_management\Book_management;

require_once(realpath(dirname(__FILE__)) . '/../Book_management/Book_management/Book.php');

use Book_management\Book_management\Book;

/**
 * @access public
 * @author M.S.I
 * @package Book_management\Book_management
 */
class Category {

    /**
     * @AttributeType Book_management\Book_management\Book
     * @AssociationType Book_management\Book_management\Book
     */
    public $_book;

    // Attribute: Category name
    public $name;

    // Attribute: Description
    public $description;

    // Function: Constructor to initialize category
    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    // Function: Display category details
    public function displayCategory() {
        return "Category: {$this->name}, Description: {$this->description}";
    }

    // Function: Update category description
    public function updateDescription($newDescription) {
        $this->description = $newDescription;
        return "Description updated";
    }
}
?>