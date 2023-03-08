<?php
require_once 'Model/AdminModel.php';
class AdminController
{
    private $email;
    private $psw;
    function Admin()
    {
        if (isset($_POST["test"])) {
            $this->email = $_POST["email"];
            $this->psw = $_POST["password"];
            $test = new AdminModel;
            $row = ($test->AdminLog($this->email, $this->psw))['result'];
            $role = ($test->AdminLog($this->email, $this->psw))['role'];
            if (isset($row['email']) && isset($row['password'])) {
                if ($this->email == $row['email'] && $this->psw == $row['password']) {
                    if ($role == 'admin') {
                        $_SESSION['user'] = 'admin';
                    }
                    if ($role == 'client') {
                        $_SESSION['user'] = 'client';
                        $_SESSION['clientId'] = $row['clientId'];
                    }
                }
            } else {
                die('error');
            }
        }
    }
    function Logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['clientId']);
    }
}
