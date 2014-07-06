<?php
/**
 * Created by PhpStorm.
 * User: burial
 * Date: 6/07/14
 * Time: 5:11 PM
 */
// return gravatar img tags for given email
function gravatar_tag($email)
{
  return '<img src="http://www.gravatar.com/avatar/' . md5($email) . '?s=60" alt=".$email. }}"/>';
}