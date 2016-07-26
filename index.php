<?
/**
 * DevFramework
 * Framework loader - acts as a single point of access to the Framework
 *
 * @version 0.1
 * @author Youriy Kochegarov aKa Cooper
 */

session_start();
ini_set('display_errors', 1);
// We will use this to ensure scripts are not called from outside of the framework
define( "DFW", true );

require_once ("application/load.php");