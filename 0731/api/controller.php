<?php
include "./base.php";

$data = $_GET;
 return   dd($data);

class ListController
{

    public function store()
    {
        $data = $_GET;
        return dd($data);
    }
    public function update()
    {
        $data = $_GET;
        dd($data);
    }
    public function del()
    {
        $data = $_GET;
        dd($data);
    }
    public function rollback()
    {
        $data = $_GET;
        dd($data);
    }
}
