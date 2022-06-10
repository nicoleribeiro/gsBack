<?php

namespace App\Models;

class Mensagem
{
    private static $table = 'faleConosco';

    public static function select(int $id)
    {
        $conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $sql = 'SELECT * FROM ' . self::$table . ' WHERE id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhuma mensagem encontrada!");
        }
    }

    public static function selectAll()
    {
        $conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $sql = 'SELECT * FROM ' . self::$table;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhuma mensagem encontrada!");
        }
    }

    public static function insert($data)
    {
        $connPdo = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $sql = 'INSERT INTO ' . self::$table . ' nome = :nome, email = :email, mensagem = :mensagem';
        $stmt = $connPdo->prepare($sql);
        $stmt->bindValue(':nome', $data['nome']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':mensagem', $data['mensagem']);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return 'Mensagem inserida com sucesso!';
        } else {
            throw new \Exception("Falha ao inserir mensagem!");
        }
    }

    public static function update($data, $id)
    {
        $connPdo = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $sql = 'UPDATE ' . self::$table . 'SET nome = :nome, email = :email, mensagem = :mensagem WHERE id = :id';
        $stmt = $connPdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':nome', $data['nome']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':mensagem', $data['mensagem']);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return 'Mensagem alterada com sucesso!';
        } else {
            throw new \Exception("Falha ao alterar mensagem!");
        }
    }

    public static function delete($data, $id)
    {
        $connPdo = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $sql = 'DELETE FROM ' . self::$table . 'WHERE id = :id';
        $stmt = $connPdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':nome', $data['nome']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':mensagem', $data['mensagem']);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return 'Mensagem alterada com sucesso!';
        } else {
            throw new \Exception("Falha ao alterar mensagem!");
        }
    }
}
