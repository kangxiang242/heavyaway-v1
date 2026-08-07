<?php


namespace App\Repository;


use App\Models\Contact;

class ContactRepository extends BaseRepository
{
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }

    public function create(array $data = []){
        $data['ip'] = request()->ip();
        return $this->model->create($data);
    }
}
