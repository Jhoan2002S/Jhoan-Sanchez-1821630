<?php
//Herencia
class publication extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publications");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publicarions (title, descripcion, url_imagen) VALUES (?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['url_img'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM users WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['email'], PDO::PARAM_STR);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
       public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM publications   WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
}
