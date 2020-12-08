<?php

interface interfaceDao {
    public function add(Object $objet);
    public function delete(Int $id);
    public function update(Object $objet);
    public function research();
    public function researchBy(Int $id);
}