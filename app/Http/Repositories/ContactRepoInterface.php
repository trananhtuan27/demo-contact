<?php


namespace App\Http\Repositories;


interface ContactRepoInterface
{
    public function getAll();

    public function storeOrUpdate($obj);

    public function delete($obj);

    public function findById($id);
}
