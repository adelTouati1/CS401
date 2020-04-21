<?php

class Dao
{
    private $host = 'ec2-52-200-119-0.compute-1.amazonaws.com';
    private $dbname = 'db81fu8e8voo4h';
    private $user = 'tgytuuqlwplvpp';
    private $password = '0daf0f78050e7fbee2685f12ba1c8a31cb12123bec90a9b3c2de61c9ad4a015c';


       /**
     * Establish DB connection
     * @return PDO connection object
     */
    private function getConnection()
    {
        try {
			return
            $connection = new PDO("pgsql:host={$this->host};port=5432;dbname={$this->dbname}", $this->user,
                    $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            
		} catch (Exception $e) {
			echo "connection failed: " . $e->getMessage();
		}
	}

    public function addUser($firstname, $lastname, $email, $password)
    {
        $conn = $this->getConnection();
        $hash = $this->hashPassword($password);
		$query = $conn->prepare("INSERT INTO userSignUp (firstname, lastname, email, password)
        VALUES (:firstname, :lastname, :email, :password)");
		$query->bindParam(':firstname', $firstname);
		$query->bindParam(':lastname', $lastname);
        $query->bindParam(':email', $email);
		$query->bindParam(':password', $hash);
		$query->execute();
        
    }

    public function addImage($email, $location, $camerabrand, $lensesize, $focus, $description, $picture)
    {
       
        $conn = $this->getConnection();
		$query = $conn->prepare("INSERT INTO images (email, location, camerabrand, lensesize, focus, description, picture) 
        VALUES (:email, :location, :camerabrand, :lensesize, :focus, :description, :picture)");
        $query->bindParam(':email', $email);
        $query->bindParam(':location', $location);
		$query->bindParam(':camerabrand', $camerabrand);
		$query->bindParam(':lensesize', $lensesize);
        $query->bindParam(':focus', $focus);
        $query->bindParam(':description', $description);
        $query->bindParam(':picture', $picture, PDO::PARAM_LOB);
		$query->execute();
    }

    public function message($message,$email)
    {
       
        $conn = $this->getConnection();
		$query = $conn->prepare("INSERT INTO messages (message,email) VALUES (:message, :email)");
        $query->bindParam(':message', $message);
        $query->bindParam(':email', $email);
		$query->execute();
    }

    public function getFirstName($email)
    {
        $conn = $this->getConnection();
        $query = "SELECT firstname FROM userSignUp WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function hashPassword($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
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
        $stmt = $conn->prepare("SELECT * FROM userSignUp WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hash = $row['password'];
    
        return password_verify($password, $hash);
    }

    public function getImage($email)
    {

        $conn = $this->getConnection();
        $stmt = $conn->prepare("SELECT * FROM images WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOUND);
        $pic = $row['picture'];
    
        return $pic;
    }

	public function checkEmailExists ($email) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT email FROM userSignUp WHERE email = :email");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':email', $email);
		$query->execute();
		return $query->rowCount() > 0;
	}
}