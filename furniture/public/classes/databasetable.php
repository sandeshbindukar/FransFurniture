<?php
class DatabaseTable{
    public $table;
    function __construct($table){
        $this->table = $table; 
    }

    function save($record, $pk = ''){
    try{
        $this->insert($record);
    }
    catch(Exception $e){
        $this->update($record, $pk);
    }
}

//function to insert in the database
function insert($record) {
    global $pdo;
    $keys = array_keys($record);

    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);

    $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
    $stmt = $pdo->prepare($query);

    $stmt->execute($record);
}

//function to update in the database
function update($record, $pk) {
    global $pdo;
    $parameters = [];
    foreach($record as $key => $value){
        $parameters[] = $key. '= :' .$key;
    }
    $parametersWithComma = implode(',', $parameters);
    $query = "UPDATE $this->table SET $parametersWithComma WHERE $pk =:pk";
    $record['pk'] = $record[$pk];
    $stmt = $pdo->prepare($query);
    $stmt->execute($record);
}

//function to query from the database table with the field
function find($field, $value) {
    global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :valu');
        $criteria = [
                'valu' => $value
        ];
        $stmt->execute($criteria);

        return $stmt;
}

//function to search from the database table with the multiple fields
function findMore($field1, $value1, $field2, $value2) {
    global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field1 = :value1 AND $field2 = :value2" );
        $criteria = [
                'value1' => $value1,
                'value2' => $value2
        ];
        $stmt->execute($criteria);

        return $stmt;
}

//function to query from the database table with the multiple fields
function findMoreX($field1, $value1, $field2, $value2, $field3, $value3) {
    global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field1 = :value1 AND $field2 = :value2  AND $field3 = :value3" );
        $criteria = [
                'value1' => $value1,
                'value2' => $value2,
                'value3' => $value3
        ];
        $stmt->execute($criteria);

        return $stmt;
}

//function to query from the database table 
function findAll() {
    global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM ' . $this->table );

        $stmt->execute();

        return $stmt;
}

//function to delete from database table
function delete($field, $value) {
    global $pdo;
        $stmt = $pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :pk');
        $criteria = [
                'pk' => $value
        ];
        $stmt->execute($criteria);

        return $stmt;
}

//function to query from the table where archive is condition
 function findSpc($vals, $arch)
    {
        global $pdo;
        $str = implode(', ', $vals);

        $stmt = $pdo->prepare('SELECT '.$str.' FROM ' . $this->table . ' WHERE archive = :arch');
   
        $stmt->execute(['arch' => $arch]);

        return $stmt;
    }

//function to archive the data
  function archive($id, $archive,$pk)
    {
        global $pdo;

        $update ="UPDATE $this->table SET archive = :archive";
        $update .=" WHERE $pk = :id";

        $criteria = ['id'=> (int)$id,
                    'archive' => $archive ];

        $stmt = $pdo->prepare($update);
        $stmt->execute($criteria);
    }

    //function to update/set the value in the field
     function updateSingle($id, $value, $complete,$pk)
    {
        global $pdo;

        $update ="UPDATE $this->table SET $value = :complete";
        $update .=" WHERE $pk = :id";

        $criteria = ['id'=> (int)$id,
                    'complete' => $complete ];

        $stmt = $pdo->prepare($update);
        $stmt->execute($criteria);
    }

}
?>