<?php
include "./base.php";

$data = $_POST;
$action = $data['action'];
$table = ucfirst($data['table']);
// echo $action.$table;

// unset($data['action'], $data['table']);

// return dd($data);

if ($action == 'store') {

    if (isset($data['id'])) {
        echo $$table->update($data);
    } else {
        echo $$table->store($data);
    }
} elseif ($action == 'rollback') {
    echo $$table->rollbackFun();
} elseif ($action == 'del') {
    echo $$table->del();
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
    public function del()
    {
        $data = $_GET;
        dd($data);
    }
    // public function rollback()
    // {
    //     $data = $_GET;
    //     dd($data);
    // }
}
