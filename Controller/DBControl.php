<?php
//14121056 Glucina, Christian
/* DBControl contols the database, it checks if there is a
table,crates a table,makes a new entry in a table, removes a row
*/
class DBControl
{

    // checks if there is a table in the data base
    // takes in the database connection and a table name
    public function checkTable($db,$tableName)
    {

        if ($result = $db->query("SHOW TABLES LIKE '".$tableName."'")) {
            if($result->num_rows == 1) {
                return true;
            }
        } else {
            return false;
        }
    }
//runs a SQL statement and returns if it was successful
    public function Query($db, $sql)
    {

        if ($db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}