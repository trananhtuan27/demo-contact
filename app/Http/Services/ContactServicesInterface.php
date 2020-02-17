<?php


namespace App\Http\Services;


interface ContactServicesInterface
{
    public function getAll();

    public function create($request);

    public function update($data,$id);

    public function destroy($id);

    public function findById($id);
}
