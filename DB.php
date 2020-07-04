<?php
    session_start();
    class DB{
        public $dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
        public $pdo;
        function __construct(){
            $this->pdo = new PDO($this->dsn,'root','');
        }
        function all($table,...$arg){
            $sql = "select * from `$table` where ";
            if(!empty($arg[0])&&is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[] = sprintf("`%s` = '%s'",$key,$value);
                }
                $sql .= implode(' && ',$tmp);
            }else{
                $sql .= ' 1 ';
            }
            if(!empty($arg[1])){
                $sql .= $arg[1];
            }
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }
        function find($table,...$arg){
            $sql = "select * from `$table` where ";
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[] = sprintf("`%s` = '%s'",$key,$value);
                }
                $sql .= implode(' && ',$tmp);
            }else{
                $sql .= "`id` = '$arg[0]'";
            }
            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }
        function num($table,...$arg){
            $sql = "select count(*) from `$table` where ";
            if(!empty($arg[0])&&is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[] = sprintf("`%s` = '%s'",$key,$value);
                }
                $sql .= implode(' && ',$tmp);
            }else{
                $sql .= ' 1 ';
            }
            if(!empty($arg[1])){
                $sql .= $arg[1];
            }
            return $this->pdo->query($sql)->fetchColumn();
        }
        function save($table,$arg){
            if(!empty($arg['id'])){
                foreach($arg as $key => $value){
                    if($key !== 'id'){
                        $tmp[] = sprintf("`%s` = '%s'",$key,$value);
                    }
                }
                $sql = "update `$table` set ".implode(' , ',$tmp)." where `id` = '".$arg['id']."'";
            }else{
                $keys = array_keys($arg);
                $values = array_values($arg);
                $sql = "insert into `$table` (`".implode('`,`',$keys)."`) values ('".implode("','",$values)."')";
            }
            echo $sql;
            return $this->pdo->exec($sql);
        }
        function del($table,$id){
            $sql = "delete from `$table` where `id` = '$id'";
            return $this->pdo->exec($sql);
        }
    }
    function to($url){
        header("location:$url");
    }
?>