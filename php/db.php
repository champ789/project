<?php
final class DataBase
{
    protected $mysqli;

    public function __construct()
    {
        $mysqli = new mysqli("localhost", "root", "12345678", "project");
        $mysqli->set_charset("utf8");
        $this->mysqli = $mysqli;
    }

    public function query($query)
    {
        $return = $this->mysqli->query($query);
        return $return;
    }

    public function select($query)
    {
        $return = $this->mysqli->query($query);
        return $return;
    }

    public function insert($query)
    {
        $return = $this->mysqli->query($query);
        return $return;
    }

    public function update($query)
    {
        $return = $this->mysqli->query($query);
        return $return;
    }

    public function fetch($query)
    {
        $return = $query->fetch_assoc();
        return $return;
    }

    public function numrow($query)
    {
        $return = $query->num_rows;
        return $return;
    }

    public function counts($query)
    {
        return $this->numrow($query);
    }

    public function escape($query)
    {
        $return = $this->mysqli->real_escape_string($query);
        return $return;
    }

    public function nextid()
    {
        $return = $this->mysqli->insert_id;
        return $return;
    }

    public function freeresult($query)
    {
        $query->free();
    }

    public function close()
    {
        $this->mysqli->close();
    }
}
?>