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

//function login($usersArray)
function login()
{
    $usersArray = $_POST;
    if(isset($usersArray['email']))
    {
//        if(checkLogin($usersArray['email']))
        if(checkLogin())
        {
//            $_SESSION['email'] = $usersArray['email'];
            $_SESSION['email'] = $_POST['email'];
            require "view/home.php";
        }
        else
        {
            $errorMsg = "Erreur: identifiants incorrects";
            require "view/login.php";
        }
    }
    else
    {
        require "view/login.php";
    }
}

function logout()
{
    session_destroy();
    $_SESSION = array();
    require "view/home.php";
}

function register()
{
    $newUser = $_POST;
    # Check if the user comes from another page
    if (isset($newUser['userPswdConfirm']))
    {
        if($_POST['userPswd'] == $_POST['userPswdConfirm'])
        {
            if(checkNewUser())
            {
                addNewUser();
                $_SESSION['email'] = $_POST['email'];
                require "view/home.php";
            }
            else
            {
                $errorMsg = "Cette addresse email possède déjà un compte";
                require "view/register.php";
            }
        }
        else
        {
            $errorMsg = "Les mots de passe ne correspondent pas.";
            require "view/register.php";
        }
    }
    else
    {
        require "view/register.php";
    }
}