<?php
namespace User_management\User_management;

/**
 * @access public
 * @author M.S.I
 * @package User_management\User_management
 */
class User_ {
    // Attributes
    public $userID;
    public $username;
    public $email;
    public $password;
    public $role; // admin or customer

    // Constructor
    public function __construct($userID, $username, $email, $password, $role) {
        $this->userID = $userID;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    // Login function
    public function login($enteredUsername, $enteredPassword) {
        if ($enteredUsername === $this->username && $enteredPassword === $this->password) {
            return "Login successful";
        } else {
            return "Invalid credentials";
        }
    }

    // Register function
    public function register() {
        // Example: insert user data into database
        return "User registered successfully";
    }

    // Role check
    public function isAdmin() {
        return $this->role === "admin";
    }
}
?>