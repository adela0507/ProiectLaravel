<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Clients')->insert([
            'name' => 'Miclea',
            'prenume'=>'Adela',
            'username' => 'Adela05',
            'email' => 'adela@adela.com',
            'oras' => 'Ocna Mures',
            'strada'=>'Malinului',
            'tara'=>'Ro',
            'nrinreg'=>'1',
            'tipcard'=>'Visa',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Ploscar',
            'prenume'=>'Denisa',
            'username' => 'Denisa01',
            'email' => 'denisa@denisa.com',
            'oras' => 'Brasov',
            'strada'=>'Lunga',
            'tara'=>'Ro',
            'nrinreg'=>'2',
            'tipcard'=>'Master',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Fildan',
            'prenume'=>'Anamaria',
            'username' => 'AnaFil',
            'email' => 'ana@ana.com',
            'oras' => 'Oradea',
            'strada'=>'piata 1 decembrie',
            'tara'=>'Ro',
            'nrinreg'=>'3',
            'tipcard'=>'Visa',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Mot',
            'prenume'=>'Denis',
            'username' => 'Denis22',
            'email' => 'denis@denis.com',
            'oras' => 'Ocna Mures',
            'strada'=>'Digului',
            'tara'=>'Ro',
            'nrinreg'=>'4',
            'tipcard'=>'Visa',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Feldes',
            'prenume'=>'Darius',
            'username' => 'Dariuselu',
            'email' => 'darius@darius.com',
            'oras' => 'Bacau',
            'strada'=>'Stramta',
            'tara'=>'Ro',
            'nrinreg'=>'5',
            'tipcard'=>'Master',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Matei',
            'prenume'=>'Daria',
            'username' => 'Daria88@1',
            'email' => 'daria@daria.com',
            'oras' => 'Suceava',
            'strada'=>'Bulevard enescu george',
            'tara'=>'Ro',
            'nrinreg'=>'6',
            'tipcard'=>'Visa',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Hiricko',
            'prenume'=>'Andreea',
            'username' => 'Adreiutza34',
            'email' => 'andreea@andreea.com',
            'oras' => 'Zalau',
            'strada'=>'Coposu corneliu',
            'tara'=>'Ro',
            'nrinreg'=>'7',
            'tipcard'=>'Mater',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Alex',
            'prenume'=>'Moldoveanu',
            'username' => 'Alex.02',
            'email' => 'alex@alex.com',
            'oras' => 'Cluj',
            'strada'=>'Baritiu george',
            'tara'=>'Ro',
            'nrinreg'=>'8',
            'tipcard'=>'Visa',
        ]);
        DB::table('Clients')->insert([
            'name' => 'Rusu',
            'prenume'=>'Bianca',
            'username' => 'BiancaR26',
            'email' => 'bianca@bianca.com',
            'oras' => 'hunedoara',
            'strada'=>'closca',
            'tara'=>'Ro',
            'nrinreg'=>9,
            'tipcard'=>'Visa',
        ]);

        DB::table('Clients')->insert([
            'name' => 'Mihai',
            'prenume'=>'Ionut',
            'username' => 'Mihaita',
            'email' => 'mihai@mihai.com',
            'oras' => 'Arad',
            'strada'=>'Malinului',
            'tara'=>'Ro',
            'nrinreg'=>10,
            'tipcard'=>'Visa',
        ]);
    }
}