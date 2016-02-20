<?php
include_once 'models/PetModel.php';

class PetRepository {
    //declare a new property
    private $db;

    //declare a constructor method requires a database connection as argument
    public function __construct($dbConnection) {
        //store the received conection in the $this->db property
        $this->db = $dbConnection;
    }

    public function getPets() {
        //the actual SQL statement
        $petList = array();
        $i = 0;
        $sql = "SELECT pet_id, petName, price, imagePath FROM pet";
        $pets = $this->db->query($sql);
        $pet = $pets->fetch();
        while ($pet) {
            $petList[$i++] = new Pet($pet['pet_id'], $pet['petName'], $pet['price'], $pet['imagePath']);
            $pet = $pets->fetch();
        }

        return $petList;
    }

    public function savePet($pet) {
        $sql = "UPDATE pet SET "
                . "petName = '$pet->petName'"
                . ", price = $pet->price"
                . ", imagePath = '$pet->imagePath' "
                . "WHERE pet_id = $pet->petID";
        $updateCount = $this->db->exec($sql);
        if ($updateCount > 0)
            return "$pet->petName was saved.";
        else
            return "$pet->petName wasn't saved.";
    }

    public function deletePet($petID) {
        $sql = "DELETE FROM pet "
                . "WHERE pet_id = $petID";
        $deleteCount = $this->db->exec($sql);
        if ($deleteCount > 0)
            return "PetID: $petID was deleted.";
        else
            return "PetID: $petID wasn't deleted.";
    }

    public function addPet($pet) {
        $sql = "INSERT INTO pet (petName, price, imagePath) VALUES ("
                . "'$pet->petName', "
                . "$pet->price, "
                . "'$pet->imagePath')";
        $insertCount = $this->db->exec($sql);
        if ($insertCount > 0)
            return "$pet->petName was added.";
        else
            return "$pet->petName wasn't added.";
    }

}
