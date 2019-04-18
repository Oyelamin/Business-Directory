<?php

class Query{
    protected $pdo;

    public function __construct($pdo){     //Access the pdo instance
        $this->pdo = $pdo;
    }
    private function prepare($ag) {
        $select = $this->pdo->prepare($ag);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);
    }
    public function findAll($tableName, $conditions = [], $limit = []) {

        if (isset($tableName) && !empty($tableName)){ //select * from table
            
            if (isset($conditions) && !empty($conditions)) { // select * from table where condition = value

                if(isset($limit) && !empty($limit)){    // select * from table where condition = value limit 1
                    function mappers($n,$m){
                        return "$n = $m";
                    }
                    function limit($n,$m){
                        return "$n $m";
                    }
                    $array_limit = array_map("limit",array_keys($limit),array_values($limit));
                    $array_condition = array_map("mappers",array_keys($conditions),array_values($conditions));
                    $condition = implode(' AND ',$array_condition);
                    $limit = implode(' ',$array_limit);
                    $params = "SELECT * FROM $tableName WHERE $condition $limit";
                    echo $params;
                }else{
                    function mappers($n,$m){
                        return "$n = $m";
                    }
                    $array_condition = array_map("mappers",array_keys($conditions),array_values($conditions));
                    $condition = implode(' AND ',$array_condition);
                    $params = "SELECT * FROM $tableName WHERE $condition";
                    return Query::prepare($params);
                }
                
            }else{
                $params = "SELECT * FROM ".$tableName;
                return Query::prepare($params);
            }
        } else{
           throw new Exception("Table name is not identified");
        }
    }
    public function insertAll($table,$parameters){
        if(isset($table) && !empty($table)){

            if(isset($parameters) && !empty($parameters)){

                $params= sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,implode(',',array_keys($parameters)),'"'.implode('","',array_values($parameters)).'"');
                try{
                    
                    return Query::prepare($params);
    
                }catch(PDOException $e){
                    die($e->getMessage());
                }
           }else{
               throw new Exception("Please provide the insert data name");
           }
        }else{
            throw new Exception("Please provide the table name to save the data");
        }
    }
    public function update($table, $parameters = [], $condition, $value){
        if(isset($table) && !empty($table)){
            if(isset($parameters) && !empty($parameters)){
                function paramsValue($n,$v){
                    return "$n = '$v'";
                }
                $para_map = array_map("paramsValue",array_keys($parameters),array_values($parameters));
                $params= sprintf(
                    "UPDATE %s SET %s  WHERE %s= %s",
    
                    $table,

                    implode(',',$para_map),

                    $condition,

                    $id

                );
                try{

                    return Query::prepare($params);

                }catch(PDOException $e){
                    die($e->getMessage());
                }
           }else{
               throw new Exception("Please provide the insert data name");
           }
        }
    }
    public function destroy($table,$condition, $value){
        $params = sprintf("DELETE FROM %s where %s= %s",
                            $table,
                            $condition,
                            $value);
        return Query::prepare($params);
        
    }
    
}