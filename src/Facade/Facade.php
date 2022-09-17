<?php
namespace Src\Facade;

abstract class Facade{
   
   abstract protected static function instance();

   public static function __callStatic($method, $arguments)
   {
      return static::instance()->$method(...$arguments);
   }
}