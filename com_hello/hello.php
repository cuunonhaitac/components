<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );//code b?o m?t joomla
require_once( JPATH_COMPONENT.DS.'controller.php' );//require file controller.php v�o
$controller = new HelloController();//t?o 1 d?i t?ong cho class HelloController
$controller->execute( JRequest::getVar( 'task' ));//Th?c thi nhi?m v?, c� nghia l� n� s? in ra tr�n web d�ng 'Hello-World- khi n�o l�m xong th� bit �

?>