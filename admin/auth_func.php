<?php
$_ip = "127.0.0.1";
$_name = "u1821174_root";
$_p = "c3VwZXJfZGF0YWJhc2VfZm9yX3dlYnNpdGU=";
$_db = "u1821174_wre_auth";

$data = mysqli_connect($_ip, $_name, $_p , $_db);

function get_all() {
    global $data;
    $flats = $data->query('SELECT * FROM property_post ORDER BY id desc');
    return $flats;
}

function get_all_index() {
    global $data;
    $_flats = $data->query("SELECT * FROM property_post ORDER BY id desc LIMIT 6");
    return $_flats;
}

function get_flats_by_id($id){
    global $data;
    $flats = $data->query("SELECT * FROM property_post WHERE `id` = $id");
    foreach ($flats as $flat){
        return $flat;
    }
}

function get_image_flats_by_id($id){
    global $data;
    $flats_img = $data->query("SELECT * FROM photo_flats WHERE `id_flats` = $id");
    foreach ($flats_img as $flat_img){
        return $flat_img;
    }
}

?>