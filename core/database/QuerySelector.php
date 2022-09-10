<?php

class QuerySelector
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }    

    public function getAllRows($table){
        $stmt = $this->pdo->query("SELECT * FROM {$table}");
        $table = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $table;
    }

    public function insert($table, $data)
    {
        $request = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(', ', array_keys($data)),
            ':' . implode(', :', array_keys($data))
        );
        $stmt = $this->pdo->prepare($request);
        $stmt->execute($data);
    }

    public function delete($table, $data)
    {
        $request = sprintf(
            "DELETE FROM %s WHERE %s=%s",
            $table,
            implode('', array_keys($data)),
            ':' . implode('', array_keys($data))
        );
        $stmt = $this->pdo->prepare($request);
        $stmt->execute($data);
    }
}

