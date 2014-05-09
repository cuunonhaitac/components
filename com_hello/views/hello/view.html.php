<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );//bao mat
	jimport( 'joomla.application.component.view');//import class JView
	class HelloViewHello extends JView//t?o clas HelloViewHello
	{
	function display($tpl = null)
	{
	$greeting = "Hello World!";// N?i dung s? hi?n th? ra trình duy?t
	$this->assignRef( 'greeting', $greeting );//dua noi dung này vao temp
	parent::display($tpl);
	}
	}
?>