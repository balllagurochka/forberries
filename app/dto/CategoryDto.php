<?php

namespace app\dto;

use app\PdoConfig;

class CategoryDto implements DtoInterface
{

    public static function insert($object): void
    {
        $db = PdoConfig::setup();
        $q = $db->prepare("INSERT INTO categories (name) VALUES (:name)");
        $q->execute([
            "name" => $object->getName()
        ]);
    }

    public static function selectAll(): array
    {
        $db = PdoConfig::setup();
        $q = $db->query("SELECT * FROM categories");
        return $q->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getById(int $id): ?array
    {
        // TODO: Implement getById() method.
    }

    public static function deleteById(int $id): void
    {
        // TODO: Implement deleteById() method.
    }

    public static function updateById(int $id, array $object): void
    {
        // TODO: Implement updateById() method.
    }
}