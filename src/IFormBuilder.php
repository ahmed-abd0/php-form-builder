<?php

namespace Src;

interface IFormBuilder{

public function form(array $attrs);
public  function input(array $attrs);
public  function textarea(array $attrs);
public function label(array $attrs);
public function select(array $attrs);
public function endForm();
public  function get();

}
