<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1=Role:: create(['name'=>'Admin ']);
       $role2=Role:: create(['name'=>'Usuario']);

        Permission::create(['name'=>'admin.categories.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.categories.store'])->assignRole($role1);;
        Permission::create(['name'=>'admin.categories.update'])->assignRole($role1);;
        Permission::create(['name'=>'admin.categories.delete'])->assignRole($role1);;
       
        Permission::create(['name'=>'admin.products.index'])->assignRole($role1);;
        Permission::create(['name'=>'admin.products.store'])->assignRole($role1);;
        Permission::create(['name'=>'admin.products.update'])->assignRole($role1);;
        Permission::create(['name'=>'admin.products.delete'])->assignRole($role1);;



        
       


    }


}
