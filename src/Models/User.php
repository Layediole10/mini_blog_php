<?php

namespace Hello\BlogPhp\Models;


class User extends Model
{
    private int $_id;
    private string $_fname;
    private string $_lname;
    private string $_pseudo;
    private string $_email;
    private string $_password;
    private string $_dateOfBirth;    
    private string $_role;
    private bool $_activate;
    


    public function __construct(string $email, string $password, string $fname = "", string $lname = "", string $pseudo = "",   string $dateOfBirth = "")
    {
        $this->dbConnect();
        $this->table = "user";

        $this->_email = $email;
        $this->_password = password_hash($password,PASSWORD_DEFAULT);
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_pseudo = $pseudo;
        $this->_dateOfBirth = $dateOfBirth;
        $this->_role = "user";
        $this->_activate = true;        
    }

    // calculer l'age de l'utilisateur
    public function ageCalculator(){

        $birth = date_create($this->_dateOfBirth);
        $today = date_create(date("d/m/y", time()));
        $myAge = date_diff($today, $birth)->format("%y");

        if ($myAge > 1) {

            return $this->_fname." ".$this->_lname.",vous avez ". $myAge." ans";

        }else{

            return $this->_fname." ".$this->_lname.",vous avez ". $myAge." an";
        }

    }

    // inserrer des données dans la base de données
    public function insertData(){
       
       $requete = "INSERT INTO `$this->table` (first_name, last_name, pseudo, email, password, date_of_birth, role, activate) VALUES ( :first_name,:last_name, :pseudo, :email, :password, :date_of_birth, :role, :activate)";
    //    requete preparée
        $prep = $this->pdo->prepare($requete);
        $prep->bindParam(":first_name", $this->_fname);
        $prep->bindParam(":last_name", $this->_lname); 
        $prep->bindParam(":email", $this->_email);
        $prep->bindParam(":password", $this->_password);
        $prep->bindParam(":date_of_birth", $this->_dateOfBirth);
        $prep->bindParam(":role", $this->_role);
        $prep->bindParam(":activate", $this->_activate);
        $prep->execute();
        
      }

    //   selection d'un utiliseur a partir de son email
    public function getOneByEmail(){

        $requete = "SELECT * FROM $this->table WHERE email = :email";
        $prep = $this->pdo->prepare($requete);
        $prep->bindParam(":email", $this->_email);
        $prep->execute();
        return $prep->fetch(\PDO::FETCH_ASSOC);

    }

 
    //   transformer un objet en chaine de caracteres
    public function __toString()
    {
        return "{
            User: {
                First name : $this->_fname
                Last name : $this->_lname
                Email : $this->_email
                Pseudo : $this->_pseudo
                Password : $this->_password
                Date of birth : $this->_dateOfBirth
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

    public function getDateOfBirth(){
        return $this->_dateOfBirth;
    }

    public function getRole(){
        return $this->_role;
    }

    public function isActivate(){
        return $this->_activate;
    }

    // setters
    public function setFname(string $fname){
        $this->_fname = ucfirst($fname);
    }

    public function setLname(string $lname){
        $this->_fname = strtoupper($lname);
    }

    public function setRole(string $_role){
        $this->_role = $_role;
    }

    public function setActivate(bool $_activate){
        $this->_activate = $_activate;
    }
}
