<?php

class Dao
{
    //TODO: change when deploying to production
    private $host = "localhost";
    private $dbname = "photographyZone";
    private $user = "Adel";
    private $password = "Alg3ria>1122";

    public function addUser($firstName, $lastName, $email, $password)
    {
        $conn = $this->getConnection();

        $digest = $this->hashPassword($password);

        $query = "INSERT INTO userSignUp (first_name, last_name, email, password)
VALUES (:firstName, :lastName, :email, :password)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":firstName", $firstName);
        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $digest);

        $stmt->execute();
    }

    public function addImage($location, $cameraBrand, $lenseSize, $focus, $Description)
    {
        $conn = $this->getConnection();


        $query = "INSERT INTO images (location, cameraBrand, lenseSize, focus, Description)
VALUES (:location, :cameraBrand, :lenseSize, :focus, :Description)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":location", $location);
        $stmt->bindParam(":cameraBrand", $cameraBrand);
        $stmt->bindParam(":lenseSize", $lenseSize);
        $stmt->bindParam(":focus", $focus);
        $stmt->bindParam(":Description", $Description);

        $stmt->execute();
    }

    /**
     * Establish DB connection
     * @return PDO connection object
     */
    private function getConnection()
    {
        // Create PDO instance using MySQL connection string.
       // $conn = new PDO("mysql:photographyZone={$this->dbname};host={$this->host};",
          //  "$this->user", "$this->password");
        $conn = mysqli_connect($host, $dbname, $user, $password);  
        return $conn;
    }

    /**
     * Hash the specified password
     * @param $password user password to hash
     * @return bool|string the specified password hashed
     */
    public function hashPassword($password)
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
        $query = "SELECT first_name FROM photographyZone WHERE email = :email";
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