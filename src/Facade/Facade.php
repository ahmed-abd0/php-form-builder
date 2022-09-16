<?php
namespace Src\Facade;

abstract class Facade{
   
   abstract protected static function instance();

   public static function __callStatic($name, $arguments)
   {
      return static::instance()->$name(...$arguments);
   }
}