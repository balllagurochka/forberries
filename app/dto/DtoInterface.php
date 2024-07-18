<?php

namespace app\dto;
interface DtoInterface
{
    public static function insert($object) : void;
    public static function selectAll() : array;
    public static function getById(int $id) : ?array;
    public static function deleteById(int $id) : void;
    public static function updateById(int $id, array $object) : void;

}