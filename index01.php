<?php

class iphone{

    public $name;
    public $color;
    public $username;
    public $admin;

    public function get_message () {
        echo  "this is true functions ";
    }

    public function test_username() {
        if(strlen($this->username) < 3 ){
            echo " this is false username ";
        } else{
            echo " this is yes ";
        }
    }

    public function test_admin($name_admin){
        if(strlen($name_admin) < 2 ){
            echo "wow no !!";
        }else{
            echo "wow this is true ya feras ";
        }
    }


}


$iphoneferas = new iphone();

    $iphoneferas->name = "feras";
    $iphoneferas->color = "red";
    $iphoneferas->username = "ossss";
    $iphoneferas->get_message();
    $iphoneferas->test_username();
    $iphoneferas->test_admin('s');



    echo"<pre>";
    var_dump ($iphoneferas);
    echo"</pre>";

    $iphonesameer = new iphone();

    $iphoneferas->name = "sameer";
    $iphoneferas->color = "green";
    

    echo"<pre>";
    var_dump ($iphoneferas);
    echo"</pre>";

?>  