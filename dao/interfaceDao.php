<?php

interface communDAO {
    public function add(object $objet);
    public function delete(int $id);
    public function update(object $objet);
    public function research();
    public function researchBy(int $id);
}