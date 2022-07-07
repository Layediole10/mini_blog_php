<?php

namespace Hello\BlogPhp\Models;

class User
{
    private int $_id;
    private string $_fname;
    private string $_lname;
    private string $_pseudo;
    private string $_email;
    private string $_password;
    private string $_birthday;    
    private string $_role;
    private bool $_activate;


    public function __construct(string $email, string $password, string $fname = "", string $lname = "", string $pseudo = "",   string $birthday = "")
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_email = $email;
        $this->_pseudo = $pseudo;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
        $this->_birthday = $birthday;
        $this->_role = "user";
        $this->_activate = true;        
    }

    public function ageCalculator(){

        $birth = date_create($this->_birthday);
        $today = date_create(date("d/m/y", time()));
        $myAge = date_diff($today, $birth)->format("%y");

        if ($myAge > 1) {

            return $this->_fname." ".$this->_lname.",vous avez ". $myAge." ans";

        }else{

            return $this->_fname." ".$this->_lname.",vous avez ". $myAge." an";
        }

    }

    public function __toString()
    {
        return "{
            User: {
                First name : $this->_fname
                Last name : $this->_lname
                Email : $this->_email
                Pseudo : $this->_pseudo
                Password : $this->_password
                Date of birth : $this->_birthday
                Role : $this->_role

            }
        }";
    }
    

    // getters
    public function getFname(){
        return $this->_fname;
    }

    public function getLname(){
        return $this->_lname;
    }

    public function getPseudo(){
        return $this->_pseudo;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getBirthday(){
        return $this->_birthday;
    }

    // setters
    public function setFname(string $fname){
        $this->_fname = strtoupper($fname);
    }

    public function setLname(string $lname){
        $this->_fname = ucfirst($lname);
    }
}
