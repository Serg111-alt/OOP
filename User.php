<?php
class User
{
    protected $login;

    protected $password;

    public function __construct($login = null, $password = null)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function show()
    {
        return $this->login;
        return $this->password;
    }

    public function isValid($login, $password)
    {
        if( $this->login == $login && $this->password == $password){
            echo "OK";
        }   
        else{
            echo "Error";
        }
         
    }
}