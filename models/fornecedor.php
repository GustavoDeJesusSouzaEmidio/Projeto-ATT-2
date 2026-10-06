<?php

require_once __DIR__ . '/../config/db.php';

class Fornecedor
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    // Lista todos os fornecedores
    public function listar(): array
    {
        $sql = "
            SELECT id, nome, cnpj, telefone, email, endereco, ativo
            FROM fornecedor
            ORDER BY nome
        ";

        return $this->conn->query($sql)->fetchAll();
    }

    // Busca um fornecedor pelo ID
    public function buscarPorId(int $id): ?array
    {
        $stmt = $this->conn->prepare("
            SELECT id, nome, cnpj, telefone, email, endereco, ativo
            FROM fornecedor
            WHERE id = :id
        ");

        $stmt->execute([
            ':id' => $id
        ]);

        $fornecedor = $stmt->fetch();

        return $fornecedor ?: null;
    }

    // Cadastra um fornecedor
    public function inserir(
        string $nome,
        string $cnpj,
        ?string $telefone,
        ?string $email,
        ?string $endereco
    ): int {
        $stmt = $this->conn->prepare("
            INSERT INTO fornecedor
                (nome, cnpj, telefone, email, endereco)
            VALUES
                (:nome, :cnpj, :telefone, :email, :endereco)
        ");

        $stmt->execute([
            ':nome'      => $nome,
            ':cnpj'      => $cnpj,
            ':telefone'  => $telefone,
            ':email'     => $email,
            ':endereco'  => $endereco
        ]);

        return (int) $this->conn->lastInsertId();
    }

    // Atualiza um fornecedor
    public function atualizar(
        int $id,
        string $nome,
        string $cnpj,
        ?string $telefone,
        ?string $email,
        ?string $endereco
    ): void {
        $stmt = $this->conn->prepare("
            UPDATE fornecedor
            SET
                nome = :nome,
                cnpj = :cnpj,
                telefone = :telefone,
                email = :email,
                endereco = :endereco
            WHERE id = :id
        ");

        $stmt->execute([
            ':id'        => $id,
            ':nome'      => $nome,
            ':cnpj'      => $cnpj,
            ':telefone'  => $telefone,
            ':email'     => $email,
            ':endereco'  => $endereco
        ]);
    }

 public function alterarStatus(int $id, int $ativo): void
{
    $stmt = $this->conn->prepare("
        UPDATE fornecedor
        SET ativo = :ativo
        WHERE id = :id
    ");

    $stmt->execute([
        ':id' => $id,
        ':ativo' => $ativo
    ]);
}
}