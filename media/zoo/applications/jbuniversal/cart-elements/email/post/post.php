<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Class JBCartElementEmailUser
 */
class JBCartElementEmailPost extends JBCartElementEmail
{
    /**
     * @param array $params
     * @return bool
     */
    public function hasValue($params = array())
    {
        return true;
    }



    /**
     * Render elements data
     * @param  array $params
     * @return null|string
     */
    public function render($params = array())
    {

       $post = $this->getOrder()->comment;
 // jbdump($post);

        $textpost = trim($this->config->get('textpost'));
        echo "<hr>";
        echo '<h1>'.$textpost.'</h1>';
        echo "<h2><img style='vertical-align:middle' src='https://www.pochta.ru/portal-web-static/style/img/logo-rp.png'> ";
        echo " ";
        echo "<a target='_blank' href='https://www.pochta.ru/tracking#".$post."'>".$post."</h2></a>";
        echo "<p><small>Вы можете проверить трек-номер и получать уведомления на сайте Почта-России, просто нажав по номеру трек-кода в этом письме!</small></p>";
        echo " ";
        echo "<hr>";


    }


}