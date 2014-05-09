<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );//code b?o m?t joomla
require_once( JPATH_COMPONENT.DS.'controller.php' );//require file controller.php vào
$controller = new HelloController();//t?o 1 d?i t?ong cho class HelloController
$controller->execute( JRequest::getVar( 'task' ));//Th?c thi nhi?m v?, có nghia là nó s? in ra trên web dòng 'Hello-World- khi nào làm xong thì bit à

?>