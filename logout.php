<?php
session
function logout() {
    unset($_SESSION[isLoggedIn]);
    session_unset();
    session_destroy();


}