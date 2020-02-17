<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new \App\Contact();
        $contact->name = 'tuan';
        $contact->surname = 'tran';
        $contact->email = 'trananhtuan@gmail.com';
        $contact->address = 'xomm2';
        $contact->avatar = 'adgsdfg';
        $contact->save();
    }
}
