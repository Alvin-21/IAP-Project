<?php

class process{
    public function add_user_data($conn) {
        if(isset($_POST["userDetails"])){
            $f_name = $_POST["f_name"];
            $l_name = $_POST["l_name"];
            $email_address = addslashes($_POST["email_address"]);
            $city = $_POST["city"];
            $country = $_POST["country"];
            $data = array('first_name' => $f_name, 'last_name' => $l_name, 'email_address' => $email_address, 'city' => $city, 'country' => $country);
            $table = "users";
            $conn->insert($table, $data);
        }
    }
}