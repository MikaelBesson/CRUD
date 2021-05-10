<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/user.php';

class userManager {

    /**
     * return all users
     * @return array
     */
    function getUsers() {
        $conn = new DB();
        $users = [];
        $req = $conn->connect()->prepare("SELECT * FROM user");
        $result = $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_user) {
            $users[] = new user($data_user['id'], $data_user['name'], $data_user['password'], $data_user['role_fk']);
        }
        return $users;
    }

    /**
     * add an new user
     * @param user $user
     */
    function addUser(user $user) {
        $conn = new DB();
        $req = $conn->connect()->prepare("INSERT INTO user(name, password, role_fk) 
                                                VALUES (:name, :password, :role_fk)");
        $req->bindValue(':name',$user->getName());
        $req->bindValue(':password',password_hash($user->getPassword(),PASSWORD_DEFAULT));
        $req->bindValue(':role_fk',$user->getRoleFk());

        if($req->execute()){
            echo 'Utilisateur ajouté';
        }

    }

    /**
     * edit an user
     * @param user $user
     */
    function editUser(user $user) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE user SET name = :name, password = :password, role_fk = :role_fk WHERE id = :id");
        $req->bindValue(':name', $user->getName());
        $req->bindValue(':password',password_hash($user->getPassword(),PASSWORD_DEFAULT));
        $req->bindValue(':role_fk', $user->getRoleFk());
        $req->bindValue(':id', $user->getId());

        if($req->execute()){
            echo 'Utilisateur modifié';
        }

    }

    /**
     * delette an user
     * @param $userId
     */
    function deletteUser($userId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM user WHERE id = :id");
        $req->bindValue(':id', $userId);

        if($req->execute()){
            echo 'utilisateur supprimer avec succes';
        }

    }



}