<?php


namespace Domioedition\Logger\Storage;

interface StorageInterface{
    public function store($message);
}