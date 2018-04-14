<?php
/* PHP PEAR MDB2 Interface
 * Copyright (c) 2009 nhjm449 <nhjm449@gmail.com>
 */

require_once("MDB2.php");

class Database
{
    var $db;
    var $error;
    var $error_info;
    var $query_count = 0;

    function Database($dsn = null)
    {
        if ($dsn)
            return $this->connect($dsn);
    }

    function connect($dsn)
    {
        $options = array(
           'portability' => MDB2_PORTABILITY_ALL ^ MDB2_PORTABILITY_FIX_CASE ^ MDB2_PORTABILITY_EMPTY_TO_NULL,
           'persistent' => true
        );

        $this->db =& MDB2::factory($dsn, $options);

        if (PEAR::isError($this->db))
        {
            $this->error = $this->db->getMessage();
            $this->error_info = $this->db->getUserInfo();
            $this->db = null;
            return false;
        }

        $this->db->setFetchMode(MDB2_FETCHMODE_ASSOC);

        return true;
    }

    function disconnect()
    {
        $this->db->disconnect();
    }

    function query($query)
    {
        if ($this->query_count <= 0)
        {
            $names_result = $this->db->query("SET NAMES utf8");

            if (PEAR::isError($names_result))
            {
                $this->error = $names_result->getMessage();
                $this->error_info = $names_result->getUserInfo();
                return false;
            }
        }

        $result = $this->db->query($query);
//print "<br /><strong>Query:</strong> $query<br />";
        $this->query_count++;

        if (PEAR::isError($result))
        {
//            var_dump($result);
            $this->error = $result->getMessage();//."$query";
            $this->error_info = $result->getUserInfo();
            return false;
        }

        return $result;
    }

    function queryOne($query)
    {
        if ($this->query_count <= 0)
        {
            $names_result = $this->db->query("SET NAMES utf8");

            if (PEAR::isError($names_result))
            {
                $this->error = $names_result->getMessage();
                $this->error_info = $names_result->getUserInfo();
                return false;
            }
        }

        $result = $this->db->queryOne($query);

        $this->query_count++;

        if (PEAR::isError($result))
        {
            $this->error = $result->getMessage();
            $this->error_info = $result->getUserInfo();
            return false;
        }

        return $result;
    }

    function queryAll($query)
    {
        if ($this->query_count <= 0)
        {
            $names_result = $this->db->query("SET NAMES utf8");

            if (PEAR::isError($names_result))
            {
                $this->error = $names_result->getMessage();
                $this->error_info = $names_result->getUserInfo();
                return false;
            }
        }

        $result = $this->db->queryAll($query);

        $this->query_count++;

        if (PEAR::isError($result))
        {
            $this->error = $result->getMessage();
            $this->error_info = $result->getUserInfo();
            return false;
        }

        return $result;
    }

    function queryRow($query)
    {
        if ($this->query_count <= 0)
        {
            $names_result = $this->db->query("SET NAMES utf8");

            if (PEAR::isError($names_result))
            {
                $this->error = $names_result->getMessage();
                $this->error_info = $names_result->getUserInfo();
                return false;
            }
        }

        $result = $this->db->queryRow($query);

        $this->query_count++;

        if (PEAR::isError($result))
        {
            $this->error = $result->getMessage();
            $this->error_info = $result->getUserInfo();
            return false;
        }

        return $result;
    }

    function affectedRows()
    {
        return $this->db->affectedRows();
    }

    function quote($in, $type = null)
    {
        if ($type)
        {
            return $this->db->quote($in, $type);
        }
        else
        {
            return $this->db->quote($in);
        }
    }

    function quoteIdentifier($str)
    {
        return $this->db->quoteIdentifier($str);
    }
}

?>
