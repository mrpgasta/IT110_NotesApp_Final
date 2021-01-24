<?php
    include 'dbconnect.php';
    include 'authenticate.php';

    if($_POST['action']=='add_note'){
        try{
            $name = $_POST["data"]["name"];
            $description = $_POST["data"]["description"];
            $user_id = $_POST["data"]["userID"];
            ///pdo
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO notes_gasta(name, description, user_id, status, created_at) VALUES(?,?,?,?,?)");
            $prepared_statement->execute(array($name, $description, $user_id, 1, date("Y-m-d h:i:sa")));
            $pdo->commit();
        }catch(Exception $e){
            $pdo->rollBack();
            throw $e;
        }
    }else if($_POST['action']=='get_notes')
    {
        $user_id = $_POST["user_id"];

        try{

            $sql = "SELECT * FROM notes_gasta WHERE user_id = $user_id AND status = 1";
            $stm = $pdo->query($sql);
            $rows = $stm->fetchAll(pdo::FETCH_ASSOC);
            echo json_encode($rows);

        }catch(Exception $e){
            throw $e;
        }
    }else if($_POST['action']=='delete_note'){
        

        $note_id = intval($_POST['id']);

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("DELETE FROM notes_gasta WHERE id=?");
            $prepared_statement->execute(array($note_id));
            $pdo->commit();
            echo "deleted";
        }catch(Exception $e){
            $pdo->rollBack();
            throw $e;
        }
    }else if($_POST['action']=='edit_note'){
    
        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("UPDATE notes_gasta SET name=?, description=?, updated_at=? WHERE id=?");
            $prepared_statement->execute(array($_POST['data']['name'], $_POST['data']['description'], date("Y-m-d h:i:sa"), $_POST['data']['id']));
            $pdo->commit();
            echo "edited";
        }catch(Exception $e){
            $pdo->rollBack();
            throw $e;
        }
    }else if($_POST['action']=='register'){

        try{
            $fullname = $_POST['data']['fullname'];
            $username = $_POST['data']['username'];
            $password = $_POST['data']['password'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO user_gasta(fullname, username, password) VALUES(?, ?, ?)");
            $prepared_statement->execute(array($fullname, $username, $hashed_password));
            $pdo->commit();

        }
        catch(Exception $e){
            $pdo->rollBack();
            throw $e;
        }
    }

?>