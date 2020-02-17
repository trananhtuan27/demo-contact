<?php


namespace App\Http\Repositories\eloquent;


use App\Contact;
use App\Http\Repositories\ContactRepoInterface;

class ContactRepo implements ContactRepoInterface
{
protected $contact;
public function __construct(Contact $contact)
{
    $this->contact = $contact;
}

    public function getAll()
    {
      return $this->contact->paginate(5);
    }

    public function storeOrUpdate($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
      $obj->delete();
    }

    public function findById($id)
    {
        return $this->contact->findOrFail($id);
    }
    public function search($keyword){
        return $this->contact->where('name','LIKE','%'.$keyword.'%')->paginate(5);
    }
}
