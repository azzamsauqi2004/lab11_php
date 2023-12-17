<?php

class Database
{
    protected $koneksi;

    public function __construct($host, $user, $password, $db_name)
    {
        $this->conn = new mysqli($host, $user, $password, $db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->koneksi->query($sql);
    }

    public function escapeString($value)
    {
        return $this->koneksi->real_escape_string($value);
    }

    public function closeConnection()
    {
        $this->koneksi->close();
    }
}

?>