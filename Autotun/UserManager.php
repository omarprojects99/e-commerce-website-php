<?php
require_once 'User.php';

class UserManager
{
    public $db;

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function __construct($db)
    {
        $this->db = $db;
    }

   
   public function get($email, $password)
    {
        $q = $this->db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $q->bindValue(':email', $email);
        $q->bindValue(':password', $password);
        $q->execute();

        if ($q->rowCount()) {
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            $user = new User($donnees);
            return $user;
        }
        return null;
    }
    public function getUser()
    {
        $clients = array();
        $q = $this->db->query('SELECT * FROM users');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $user = new User($donnees);
            $clients[] = $user;
        }
        return $clients;
    }}
    
    
    function addUser(User $user)
    {    $conn=connect();
        $stmt = $conn->prepare('INSERT INTO users ( username,  email, password) VALUES ( :name, :email, :password)');
		$stmt->bindValue(':name', $user->name);
		$stmt->bindValue(':email', $user->email);
		
		$stmt->bindValue(':password', $user->password);
        $stmt->execute();
         
    } 
?>
