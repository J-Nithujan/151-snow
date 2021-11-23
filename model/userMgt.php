<?php

/**
 * @file      userMgt.php
 * @brief     File description
 * @author    Created by nithujan.jegatheeswa
 * @version   19.11.2021
 */


function checkLogin()
{
    //Get JSON file
    //Store data in variable
    //Read data
    //Compare with $_POST

    $email = $_POST['email'];
    $pwd = $_POST['userPswd'];

//    if($users = file_get_contents("../users.json") != null)
    $users = file_get_contents("model/users.json");
    if($users != null)
    {
        $usersDecoded = json_decode($users, true);

        foreach ($usersDecoded as $key => $tabUsersInter)
        {
            foreach ($tabUsersInter as $entry => $tabLogin)
            {
                if (in_array($email, $tabLogin) && in_array($pwd, $tabLogin))
                {
                    return true;
                }
            }
        }
        return false;
    }
}