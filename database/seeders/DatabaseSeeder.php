<?php

namespace Database\Seeders;

use App\Models\Docente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
            //'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);

        
        $admin = Role::create(["name"=>"admin"]);
        $personal = Role::create(["name"=>"personal"]);

        User::create([
            "name" => "Administrador",
            "email"=>"admin@admin.com",
            "password"=> Hash::make("12345678")
        ])->assignRole("admin");

       User::create([
           "name" => "docente",
            "email"=>"docente@docente.com",
           "password"=> Hash::make("12345678")
        ])->assignRole("personal");;

        User::create([
            "name" => "docente",
            "email"=>"docente1@docente.com",
            "password"=> Hash::make("12345678")
        ])->assignRole("personal");

        User::create([
            "name" => "docente",
            "email"=>"docente2@docente.com",
            "password"=> Hash::make("12345678")
        ])->assignRole("personal");




//ruta para admin-usuario
        Permission::create(["name"=>"admin.index"])->syncRoles([$admin]);
        Permission::create(["name"=>"admin.usuarios.index"])->syncRoles([$admin]);
        Permission::create(["name"=>"admin.usuarios.create"])->syncRoles([$admin]);
        Permission::create(["name"=>"admin.usuarios.store"])->syncRoles([$admin]);

//ruta para admin-docentes-personals
Permission::create(["name"=>"admin.personals.index"])->syncRoles([$admin]);
Permission::create(["name"=>"admin.personals.create"])->syncRoles([$admin]);
Permission::create(["name"=>"admin.personals.store"])->syncRoles([$admin]);


//ruta para admin-laboratorio
Permission::create(["name"=>"admin.laboratorios.index"])->syncRoles([$admin]);
Permission::create(["name"=>"admin.laboratorios.create"])->syncRoles([$admin]);
Permission::create(["name"=>"admin.laboratorios.store"])->syncRoles([$admin]);


//ruta para admin-horarios
Permission::create(["name"=>"admin.horarios.index"])->syncRoles([$admin,$personal]);
Permission::create(["name"=>"admin.horarios.create"])->syncRoles([$admin,$personal]);
Permission::create(["name"=>"admin.horarios.store"])->syncRoles([$admin,$personal]);
    }
}
