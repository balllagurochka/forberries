<?php

namespace app\dto;
interface DtoInterface
{
    public static function insert($object) : void;
    public static function selectAll() : array;
}