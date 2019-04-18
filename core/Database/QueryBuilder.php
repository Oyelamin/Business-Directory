<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){     //Access the pdo instance
        $this->pdo = $pdo;
    }

    public function show($table, $column, $value){
        $select = $this->pdo->prepare("SELECT id from $table where $column = '$value'");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_OBJ);
    }
    public function selectAdminName($table,$email_address){

        $select = $this->pdo->prepare("SELECT firstname,lastname FROM $table where email='$email_address'");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);

    }

    public function checkIfUserExists($table,$email_address){
        $select = $this->pdo->prepare("SELECT email from $table where email='$email_address'");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);
        
    }
    public function loginAdmin($table,$email_address,$password){

        $select = $this->pdo->prepare("SELECT firstname,lastname,email,password FROM $table where email='$email_address' AND password='$password'");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);
        
    }
    
    public function selectCountryNames(){
        $select = $this->pdo->prepare("SELECT name from countries");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);
    }
    public function find($table, $id){
        $select = $this->pdo->prepare("SELECT * FROM $table where id= '$id'");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);
    }
    public function destroy($table, $id){
        $select = $this->pdo->prepare("DELETE FROM `$table` where id= $id");
        return $select->execute();
    }
    public function update($table,$parameters = [],$id){
        if(isset($table) && !empty($table)){
            if(isset($parameters) && !empty($parameters)){
                function paramsValue($n,$v){
                    return "$n = '$v'";
                }
                $params = array_map("paramsValue",array_keys($parameters),array_values($parameters));
                $sql= sprintf(
                    "UPDATE %s SET %s  WHERE id= %s",
    
                    $table,

                    implode(',',$params),

                    $id

                );
                try{

                    $statement= $this->pdo->prepare("$sql");
    
                    return $statement->execute($parameters);
    
                }catch(PDOException $e){
    
                    die($e->getMessage());
    
                }
           }else{
               throw new Exception("Please provide the insert data name");
           }
        }
    }
    public function selectAll($table){  //Selects any data with the argument passed
        $select = $this->pdo->prepare("SELECT * FROM $table");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function insert($table,$parameters){
        if(isset($table) && !empty($table)){
            if(isset($parameters) && !empty($parameters)){
                $sql= sprintf(
    
                    "INSERT INTO %s(%s) VALUES(%s)",
    
                    $table,

                    implode(',',array_keys($parameters)),

                    '"'.implode('","',array_values($parameters)).'"'

                );

                try{

                    $statement= $this->pdo->prepare("$sql");
    
                    return $statement->execute($parameters);
    
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
    public function selectJoin($id){
        $select = "SELECT business_categories.category from business_categories join businesses ON business_categories.business_id = $id GROUP BY business_categories.category";
        $query = $this->pdo->prepare($select);
        $query->execute();
        $fetch = $query->fetchAll(PDO::FETCH_CLASS) ;
        return $fetch;
    }
    public function selectLike($tableName,$condition = []){
        if(isset($tableName) && !empty($tableName)){

            if(isset($condition) && !empty($condition)){
                function mapps($n,$m){
                    return "`$n` LIKE '%$m%'";
                }
                $likes = array_map("mapps",array_keys($condition),array_values($condition));
                $data = implode(" OR ", $likes);
                $select = "SELECT * FROM $tableName where $data";
                // var_dump($select);
                // exit;
                $query = $this->pdo->prepare($select);
                $query->execute();
                return $query->fetchAll(PDO::FETCH_CLASS);
                
            }
        }else{
            throw new Exception("No table Name Defined!Pleasee provide the target");
        }
    }
}