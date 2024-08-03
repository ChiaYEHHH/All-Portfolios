<?php
include "base.php";
$data = $_GET;

if (isset($data['id'])) {
    echo $Students->update($data);
} else {
    echo $Students->store($data);
}
