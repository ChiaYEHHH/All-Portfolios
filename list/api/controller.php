<?php
include "./base.php";

$action = $_POST['action'];
$table = ${ucfirst($_POST['table'])};
unset($_POST['action'], $_POST['table']);
$data = $_POST;
// echo $action.$table;


// dd($data);

if ($action == 'store') {
    echo $table->update($data);
} elseif ($action == 'save') {
    echo $table->save($data);
} elseif ($action == 'del') {
    echo $table->del($data['id']);
}

class ListController
{

    // public function store()
    // {
    // $data = $_GET;
    // return dd($data);
    // }
    // public function update()
    // {
    // $data = $_GET;
    // dd($data);
    // }
    // public function del()
    // {
        // $data = $_GET;
        // dd($data);
    // }
    // public function rollback()
    // {
    //     $data = $_GET;
    //     dd($data);
    // }
}
