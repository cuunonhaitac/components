<?php
defined( '_JEXEC' ) or die( 'Restricted access' );//code bao mat
jimport('joomla.application.component.controller');//import v�o c�i class JController (c� s�n trong joomla)
class HelloController extends JController//t?o class HelloController k? th?a t? JController
{
    function display()
    {
        parent::display();//code n�y d? hi?n th? th�ng tin ra web
    }
}
?>