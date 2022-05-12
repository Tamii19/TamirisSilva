<?php
abstract class Banco{
    abstract function save();
    abstract function remove($id);
    abstract function find($id);
    abstract function count();
    abstract function listAll();
}
?>