<?php
defined( '_JEXEC' ) or die( 'Restricted access' );//code bao mat
jimport('joomla.application.component.controller');//import vào cái class JController (có sãn trong joomla)
class HelloController extends JController//t?o class HelloController k? th?a t? JController
{
    function display()
    {
        parent::display();//code này d? hi?n th? thông tin ra web
    }
}
?>