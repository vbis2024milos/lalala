<?php

namespace app\core;

use mysqli;

abstract class BaseModel
{
    private DBConnection $db;
    private mysqli $con;

    public const RULE_EMAIL = "rule_email";
    public const RULE_REQUIRED = "rule_required";
    public $errors;

    public function __construct()
    {
        $this->db = new DBConnection();
        $this->con = $this->db->connect();
    }
    abstract public function tableName();

    abstract public function readColumns();

    abstract public function editColumns();

    abstract public function validationRules();

    public function one($where)
    {
        $tableName = $this->tableName();
        $columns = $this->readColumns();
        $query = "select " . implode(',', $columns) . " from $tableName $where limit 1";

        $dbResult = $this->con->query($query);
        $result = $dbResult->fetch_assoc();

        if($result != null){
            $this->mapData($result);
        }

    }

    public function all($where)
    {
        $tableName = $this->tableName();
        $columns = $this->readColumns();
        $query = "select " . implode(',', $columns) . " from $tableName $where";

        $dbResult = $this->con->query($query);

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        return $resultArray;

    }

    public function mapData($data)
    {
        if ($data != null) {
            foreach ($data as $key => $value) {
                if (property_exists($this, $key))
                    $this->{$key} = $value;
            }
        }
    }

    public function update($where)
    {
        $tableName = $this->tableName();
        $columns = $this->editColumns();
        $columnsHelper = array_map(fn($attr) => ":$attr", $columns);

        $commonHelper = [];

        for ($i = 0; $i < count($columnsHelper); $i++) {
            $commonHelper[] = "$columns[$i] = $columnsHelper[$i]";
        }

        $query = "update $tableName set  " . implode(',', $commonHelper) . " $where";

        foreach ($columns as $attribute) {
            $query = str_replace(":$attribute", is_string($this->{$attribute}) ? '"' . $this->{$attribute} . '"' : $this->{$attribute}, $query);
        }

        $this->con->query($query);
    }

    public function insert()
    {
        $tableName = $this->tableName();
        $columns = $this->editColumns();
        $columnsHelper = array_map(fn($attr) => ":$attr", $columns);

        $query = "INSERT $tableName ( " . implode(',', $columns) . " ) values ( " . implode(',', $columnsHelper) . ")";

        foreach ($columns as $attribute) {
            $query = str_replace(":$attribute", is_string($this->{$attribute}) ? '"' . $this->{$attribute} . '"' : $this->{$attribute}, $query);
        }

        $this->con->query($query);
    }
}