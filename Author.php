<?php
namespace Book_management\Book_management;

require_once(realpath(dirname(__FILE__)) . '/../../Book_management/Book_management/Book.php');

use Book_management\Book_management\Book;

/**
 * @access public
 * @author M.S.I
 * @package Book_management\Book_management
 */
class Author {

    /**
     * @AttributeType Book_management\Book_management\Book
     * @AssociationType Book_management\Book_management\Book
     */
    public $_book;

    // Attribute: Author name
    public $name;

    // Attribute: Biography
    public $bio;

    // Function: Constructor to initialize author
    public function __construct($name, $bio) {
        $this->name = $name;
        $this->bio = $bio;
    }

    // Function: Display author details
    public function displayAuthor() {
        return "Author: {$this->name}, Bio: {$this->bio}";
    }

    // Function: Update biography
    public function updateBio($newBio) {
        $this->bio = $newBio;
        return "Biography updated";
    }
}
?>