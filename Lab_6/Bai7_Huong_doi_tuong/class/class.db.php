<?php
class DB
{
    private $link;
    /**
     * DB Class's constructor
     * @global type $config
     */
    function __construct()
    {
        global $config;
        $this->link = mysqli_connect($config['host'], $config['user'], $config['pass'], $config['data']) or die("Can't connect");
        mysqli_query($this->link, "set names 'utf8'");
    }

    /**
     * Execute a query
     * @param string $query
     * @return result of execute
     */
    public function db_query($query)
    {
        $result = mysqli_query($this->link, $query);
        return $result;
    }

    /**
     * Fetch a row
     * @param mixed $result
     * @return array|false
     */
    public function db_fetch($result)
    {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}
