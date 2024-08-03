<?php

class DB2
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
        $sql = "SELECT * FROM $this->table";
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
            `$this->table` (`id`, `name`, `mobile`)
        VALUES
            (NULL, '{$data['name']}', '{$data['mobile']}');
        ";
        // dd($sql);

        return $this->pdo->exec($sql);
    }
    
    public function update($data)
    {
        $id = $data['id'];

        $sql = "UPDATE
                    `$this->table`
                SET
                    `name` = '{$data['name']}',
                    `mobile` = '{$data['mobile']}'
                WHERE
                    `$this->table`.`id` = $id;
                ";

        // dd($sql);

        $this->pdo->exec($sql);
    }

    public function find($id)
    {
        $data = "SELECT * FROM $this->table WHERE `id` = $id";
        return $data;
    }
    
    // del
    public function del($id)
    {
        $sql = "DELETE FROM $this->table WHERE `$this->table`.`id` = $id";
        $data = $this->pdo->exec($sql);
        return $data;
    }

    public function rollbackFun()
    {
        $sql = "TRUNCATE TABLE `class_kai`.`$this->table`";
        $this->pdo->query($sql);

        $sql = "INSERT INTO `$this->table` (`id`, `name`, `mobile`) VALUES
                                        (1, '依依', '0911111111'),
(2, '爾爾', '0922222222'),
(3, '姍姍', '0933333333'),
(4, '詩詩', '0944444444'),
(5, '伍伍', '0955555555');
                ";
        $data = $this->pdo->exec($sql);

        return $data;
        // dd($data);


        exit();
    }
}

function to($url)
{
    header("location:" . $url);
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$Teacher = new DB2('teachers');
$Student = new DB2('students');
