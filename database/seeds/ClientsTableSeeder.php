<?php

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Client::insert([
           [
               'name'             => 'Jahid Hasan',
               'phone'            => '986868787678',
               'email'            => 'client1@mail.com',
               'address'          => 'dhaka bangladesh',
               'descriptions'     => 'Some Description about client',
               'active'           => true
           ],
           [
               'name'             => 'Shamim Hasan',
               'phone'            => '25235235235235',
               'email'            => 'client2@mail.com',
               'address'          => 'feni bangladesh',
               'descriptions'     => 'Some Description about client2',
               'active'           => true
           ],
           [
               'name'             => 'Jahid Sarkar',
               'phone'            => '986868787678',
               'email'            => 'client3@mail.com',
               'address'          => 'chittagong bangladesh',
               'descriptions'     => 'Some Description about client3',
               'active'           => true
           ],
           [
               'name'             => 'Shamim Sarkar',
               'phone'            => '23523523123412',
               'email'            => 'client4@mail.com',
               'address'          => 'cumilla bangladesh',
               'descriptions'     => 'Some Description about client',
               'active'           => true
           ]
       ]);
    }
}
