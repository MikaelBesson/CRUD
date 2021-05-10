<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/role.php';

class roleManager {


    /**
     * return all role
     * @return array
     */
    function getRoles() {
        $conn = new DB();
        $roles = [];
        $req = $conn->connect()->prepare("SELECT * FROM role");
        $result = $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_role) {
            $roles[] = new role($data_role['id'],$data_role['role']);
        }
        return $roles;
    }


    /**
     * add an new role
     * @param role $role
     */
    function addRole(role $role) {
        $conn = new DB();
        $req = $conn->connect()->prepare("INSERT INTO role(role) 
                                            VALUES (:role)");
        $req->bindValue(':role',$role->getRole());
        if($req->execute()){
            echo 'role ajoutez avec succes';
        }

    }

    /**
     * edit a role
     * @param role $role
     */
    function editRole(role $role) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE role SET role = :role");
        $req->bindValue(':role', $role->getRole());

        if($req->execute()) {
            echo 'Role modifié avec succes';
        }

    }

    /**
     * delette a role
     * @param $roleId
     */
    function deleteRole($roleId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM role WHERE id = :id");
        $req->bindValue('id', $roleId);

        if($req->execute()){
            echo 'Role supprimer avec succes';
        }

    }


}