<?php
/**
 * phpfreechat.class.php
 *
 * Copyright © 2006 Stephane Gully <stephane.gully@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details. 
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the
 * Free Software Foundation, 51 Franklin St, Fifth Floor,
 * Boston, MA  02110-1301  USA
 */

require_once(dirname(__FILE__)."/pfccommand.class.php");

class pfcCommand_me extends pfcCommand
{
  function run(&$xml_reponse, $clientid, $msg)
  {
    $c =& $this->c;
    $container =& $c->getContainerInstance();
    $msg = phpFreeChat::PreFilterMsg($msg);
    $container->writeMsg("*me*", $c->nick." ".$msg);
    if ($c->debug) pxlog("Cmd_me[".$c->sessionid."]: msg=".$msg, "chat", $c->getId());
  }
}

?>