<?php
//Herencia
class student extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT p.*, u.name FROM publications AS p INNER JOIN users AS u ON p.user_id = u.id");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{

            $result = parent::connect()->prepare("INSERT INTO publications (title, description, url_image, user_id ) VALUES (?,?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['url_image'], PDO::PARAM_STR);
            $result->bindParam(4, $_SESSION['user']->name, PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error publication->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publications WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE publications SET title = ?, description = ? WHERE id = ?");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
       public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM publications  WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
}
