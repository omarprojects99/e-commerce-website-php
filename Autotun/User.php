<?php
class User{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private int $telephone;
    
    public function __construct(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $this->__set($key, $value);
        }
    }
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    public function __get($attr)
    {
        if (isset($this->$attr))
            return $this->$attr;
        else
            echo "Eattribut n'existe pas";
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    }
    function userExists($email) {
        $conn = connect();
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count > 0;
    }
    
    function AjouterUtilisateur($user) {
        $conn = connect();
        $username = $user['nom'];
        $email = $user['email'];
        $password = $user['mp'];
        if (userExists($email)) {
            echo "User already exists with this email.";
            return false;
        }
    
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
      
        $stmt->execute();
        return true;
    } 
    
    // function AjouterUtilisateur($user) {
    //     $conn = connect();
    //     $username = $user['nom'];
    //     $email = $user['email'];
    //     $password = $user['mp'];
    //     $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    //     $stmt->bindParam(':username', $username);
    //     $stmt->bindParam(':email', $email);
    //     $stmt->bindParam(':password', $password);
      
    //     $stmt->execute();
    // } 
       
      
?>