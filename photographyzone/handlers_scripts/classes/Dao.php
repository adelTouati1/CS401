<?php

class Dao
{
    private $host = 'localhost';
    private $dbname = 'photographyZone';
    private $user = 'root';
    private $password = 'Adel1234!';

    public function addUser($firstName, $lastName, $email, $password)
    {
     
        $digest = $this->hashPassword($password);
        $conn = $this->getConnection();
		$query = $conn->prepare("INSERT INTO userSignUp (firstName, lastName, email, password)
        VALUES (:firstName, :lastName, :email, :password)");
		$query->bindParam(':firstName', $firstName);
		$query->bindParam(':lastName', $lastName);
		$query->bindParam(':email', $email);
		$query->bindParam(':password', $digest);
		$query->execute();
        
    }

    public function addImage($location, $cameraBrand, $lenseSize, $focus, $Description)
    {
       
        $conn = $this->getConnection();
		$query = $conn->prepare("INSERT INTO images (location, cameraBrand, lenseSize, focus, Description) VALUES (:location, :cameraBrand, :lenseSize, :focus, :Description)");
		$query->bindParam(':location', $location);
		$query->bindParam(':cameraBrand', $cameraBrand);
		$query->bindParam(':lenseSize', $lenseSize);
        $query->bindParam(':focus', $focus);
        $query->bindParam(':Description', $Description);
		$query->execute();
    }

    /**
     * Establish DB connection
     * @return PDO connection object
     */
    private function getConnection()
    {
        try {
			return
            //$conn = new PDO("mysql:host={$this->host}:3306;dbname={$this->dbname}", $this->user,
                    //$this->password);
            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            
            $conn = new mysqli($host, $user, $password,$dbname);
		} catch (Exception $e) {
			echo "connection failed: " . $e->getMessage();
		}
	}
    

    /**
     * Hash the specified password
     * @param $password user password to hash
     * @return bool|string the specified password hashed
     */
    private function hashPassword($password)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        return $hash;
    }

    /**
     * Check to see if the specified email and password are valid
     * @param $email user email to validate
     * @param $password user password to validate
     * @return bool true if use exists in DB; false otherwise
     */
    public function validateUser($email, $password)
    {

        $conn = $this->getConnection();
        $stmt = $conn->prepare("SELECT password FROM photographyZone WHERE email= :email");

        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch();
        if (!$row) {
            return false;
        }
        $digest = $row['password'];
        return password_verify($password, $digest);
    }

    /**
     * Get the first name of the user with the specified email
     * @param $email
     * @return mixed
     */
    public function getFirstName($email)
    {
        $conn = $this->getConnection();
        $query = "SELECT firstName FROM photographyZone WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }


    public function getUserInfo($email)
    {
        $conn = $this->getConnection();

        $query = "SELECT * FROM photographyZone WHERE email = :email";
        // Create the prepared statement
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':email', $email);
        $stmt->execute();
        // And return the result (an array of rows).
        return $stmt->fetch();
    }
}