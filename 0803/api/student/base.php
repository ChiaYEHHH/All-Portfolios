<?php

class DB
{
    protected $table;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=class_kai";
    protected $pdo;


    public function __construct($table)
    {
        $this->pdo = new PDO($this->dsn, 'root', '');
        $this->table = $table;
    }

    public function all()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        // dd($data);
        return $data;
    }

    public function setRank()
    {
        $data = $this->all();
        // dd($data);
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] > 3) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        return $tmp;
    }

    public function store($data)
    {
        $sql = "
        INSERT INTO
            `students` (`id`, `name`, `mobile`)
        VALUES
            (NULL, '{$data['name']}', '{$data['mobile']}');
        ";
        // dd($sql);

        $this->pdo->exec($sql);
    }
    public function update($data)
    {
        $id = $data['id'];

        $sql = "UPDATE
                    `students`
                SET
                    `name` = '{$data['name']}',
                    `mobile` = '{$data['mobile']}'
                WHERE
                    `students`.`id` = $id;
                ";

        // dd($sql);

        $this->pdo->exec($sql);
    }

    // del
    public function del($id)
    {
        $sql = "DELETE FROM students WHERE `students`.`id` = $id";
        $this->pdo->exec($sql);
    }

    public function rollbackFun()
    {
        $sql = "TRUNCATE TABLE `class_kai`.`$this->table`";
        $this->pdo->query($sql);

        $sql = "INSERT INTO
                    `$this->table` (`id`, `name`, `mobile`)
                VALUES
                    (NULL, 'amy', '0911-111-111'),
                    (NULL, 'bob', '0922-222-222'),
                    (NULL, 'cat', '0933-333-333'),
                    (NULL, 'dog', '0944-444-444');";
        $data = $this->pdo->exec($sql);

        // dd($data);

        header('Location: reload()');
        exit();
    }
}
$Students = new DB('students');
