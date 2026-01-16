<?php
namespace System_core\System_core;

require_once(realpath(dirname(__FILE__) . '/../../System_core/System_core/Session.php'));

use System_core\System_core\Session;

/**
 * @access public
 * @author M.S.I
 * @package System_core\System_core
 */
class Database {

    // Attribute: Session association
    public $_session1;

    // Function: Connect to the database
    public function connect() {
        $conn = new \mysqli("localhost", "root", "", "bookshop_db");
        if ($conn->connect_error) {
            return "Connection failed: " . $conn->connect_error;
        }
        return $conn;
    }

    // Function: Execute a query
    public function executeQuery($query) {
        $conn = $this->connect();
        $result = $conn->query($query);
        $conn->close();
        return $result;
    }

    // Optional Function: Disconnect manually
    public function disconnect($conn) {
        $conn->close();
    }
}
?>