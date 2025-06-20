<?php
require_once 'db.php';
class UserDAO extends Database
{
    public function __construct()
    {
        parent::__construct();
    }
    

    public function register($user)
    {
        $sql = "INSERT INTO users (email_user, password_user, name_user, document_user, user_type)
         VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $user->getEmail());
        $stmt->bindValue(2, password_hash($user->getPassword(), PASSWORD_DEFAULT));
        $stmt->bindValue(3, $user->getName());
        $stmt->bindValue(4, $user->getDocument());
        $stmt->bindValue(5, $user->getUserType());
        $stmt->execute();

        return "User registered successfully!";
    }


    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email_user = ?";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_user'])) {
            return $user; 
        }

        return null; 
    }


    public function getUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id_user = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }


    public function update($user, $changePassword = true)
    {
        if ($changePassword) {
            $sql = "UPDATE users SET email_user = ?, password_user = ?, name_user = ?,
            document_user = ?, user_type = ? WHERE id_user = ?";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $user->getEmail());
            $stmt->bindValue(2, password_hash($user->getPassword(), PASSWORD_DEFAULT));
            $stmt->bindValue(3, $user->getName());
            $stmt->bindValue(4, $user->getDocument());
            $stmt->bindValue(5, $user->getUserType());
            $stmt->bindValue(6, $user->getIdUser());
        } else {

            $sql = "UPDATE users SET email_user = ?, name_user = ?, document_user = ?, user_type = ?
            WHERE id_user = ?";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $user->getEmail());
            $stmt->bindValue(2, $user->getName());
            $stmt->bindValue(3, $user->getDocument());
            $stmt->bindValue(4, $user->getUserType());
            $stmt->bindValue(5, $user->getIdUser());
        }

        $stmt->execute();

        return "User updated successfully!";
    }

}
?>
