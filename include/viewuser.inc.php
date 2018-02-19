<?php

class ViewUser extends User {

    public function showAllUsers() {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo "Naam : " . $data['naam'] . " " . $data['achternaam'] . "<br>";
            echo "Beoordeling : " . $data['beoordeling'] . "<br><br>";
            echo "Review : <br>" . $data['review'] . "<br><br><hr><br>";
        }
    }

}
