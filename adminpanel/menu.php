<?php
if (userlevel()==1)
{
    include 'adminmenu.php';
}
elseif (userlevel()==2)
{
    include 'modmenu.php';
}