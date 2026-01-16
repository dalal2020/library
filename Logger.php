<?php
namespace System_core\System_core;

require_once(realpath(dirname(__FILE__)) . '/../../System_core/System_core/Session.php');

use System_core\System_core\Session;

/**
 * @access public
 * @author M.S.I
 * @package System_core\System_core
 */
class Logger {

    // Attribute: Session association
    public $_session;

    // Function: Log a message to a file
    public function logMessage($message) {
        $timestamp = date("Y-m-d H:i:s");
        $logEntry = "[{$timestamp}] {$message}\n";
        file_put_contents("system_log.txt", $logEntry, FILE_APPEND);
        return "Message logged";
    }

    // Function: Log user login activity
    public function logLogin($username) {
        $this->logMessage("User '{$username}' logged in.");
    }

    // Function: Log book management actions
    public function logBookAction($adminName, $action, $bookTitle) {
        $this->logMessage("Admin '{$adminName}' performed '{$action}' on book '{$bookTitle}'.");
    }
}
?>