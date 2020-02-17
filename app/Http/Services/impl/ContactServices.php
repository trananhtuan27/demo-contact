<?php


namespace App\Http\Services\impl;


use App\Contact;
use App\Http\Repositories\eloquent\ContactRepo;
use App\Http\Services\ContactServicesInterface;

class ContactServices implements ContactServicesInterface
{
protected $contactRepo;
public function __construct(ContactRepo $concactRepo)
{
    $this->contactRepo = $concactRepo;
}

    public function getAll()
    {
        return $this->contactRepo->getAll();
    }

    public function create($request)
    {
        $contact = new Contact();
        $contact->fill($request->all());
        $this->contactRepo->storeOrUpdate($contact);
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
       $contact = $this->findById($id);
       $this->contactRepo->delete($contact);
    }

    public function findById($id)
    {
        return $this->contactRepo->findById($id);
    }

    public function search($request)
    {
        $keyword = $request->keyword;
        if (!$keyword){
            return redirect()->route('contact.index');
        } else {

            return $this->contactRepo->search($keyword);
        }
    }
}
