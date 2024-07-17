<?php

namespace app\dto;

use app\PdoConfig;

class CategoryDto implements DtoInterface
{

    public static function insert($object): void
    {
        // TODO: Implement insert() method.
    }

    public static function selectAll(): array
    {
        $db = PdoConfig::setup();
        $q = $db->query("SELECT * FROM categories");
        return $q->fetchAll(\PDO::FETCH_ASSOC);
    }
}