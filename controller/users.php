<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by Nithujan.JEGATHEESWA
 * @version   16.11.2021
 */

/**
 * @brief
 */

require "model/userMgt.php";

function login()
{
    //If we come from login.phpfrom
    if(isset($_POST['email']))
    {
        if(checkLogin())
        {
            require "view/home.php";
        }
        else
        {
            echo "fail";
        }
    }
    //if we come from the menu button
    else
    {
        require "view/login.php";
    }
}