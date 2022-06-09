<?php

    namespace AgroTech\Models;

    class Mensagem{
        private static $table = 'faleConosco';

        public static function select(int $id){
            // conexao
            $conn = new \PDO(DBDRIVE.' :host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            }else{
                throw new \Exception('Nenhuma mensagem encontrada.');
            }
        }

        public static function selectAll(){
            // conexao
            $conn = new \PDO(DBDRIVE.' :host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table;
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else{
                throw new \Exception('Nenhuma mensagem encontrada.');
            }
        }
    }