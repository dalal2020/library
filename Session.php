<?php
namespace System_core\System_core;

require_once(realpath(dirname(__FILE__) . '/../..//System_core/System_core/Database.php'));
require_once(realpath(dirname(__FILE__) . '/../..//System_core/System_core/Logger.php'));

use System_core\System_core\Database;
use System_core\System_core\Logger;

/**
 * @access public
 * @author M.S.I
 * @package System_core\System_core
 */
class Session {

    // Attribute: Database association
    public $_dbi;

    // Attribute: Logger association
    public $_anLogger;

    // Function: Start session
    public function startSession() {
        session_start();
        $this->_anLogger->logMessage("Session started.");
    }

    // Function: Set session variable
    public function setSession($key, $value) {
        $_SESSION[$key] = $value;
        $this->_anLogger->logMessage("Session variable '{$key}' set.");
    }

    // Function: Get session variable
    public function getSession($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Function: Destroy session
    public function destroySession() {
        session_destroy();
        $this->_anLogger->logMessage("Session destroyed.");
    }
}
?>