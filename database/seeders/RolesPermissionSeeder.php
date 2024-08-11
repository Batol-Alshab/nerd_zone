<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole=Role::create(['name'=>'admin']);
        $studentRole=Role::create(['name'=>'student']);

        $permissions=[
            'index',
            'create',
            'update',
            'delete'
        ];

        foreach($permissions as $permission){
            Permission::findOrCreate($permission,'web');
        }

        $adminRole->syncPermissions($permissions);
        $studentRole->givePermissionTo(['create','index']);

        $adminUser=User::create([
            'fname'=>'Nerd',
            'lname'=>'Zone',
            'password'=>'123456',
            'email'=>'admin@admin.com',
            'sex'=>0,
            'section_id'=>null
        ]);

        $adminUser->assignRole($adminRole);
        $adminPermissions=$adminRole->permissions()->pluck('name')->toArray();
        $adminUser->givePermissionTo($adminPermissions);

        $studentUser=User::create([
            'fname'=>'Nerd',
            'lname'=>'Zone',
            'password'=>'123456',
            'email'=>'nerd@zone.com',
            'sex'=>0,
            'section_id'=>'1'
            
        ]);
        $studentUser->assignRole($studentRole);
        $studentPermissions=$studentRole->permissions()->pluck('name')->toArray();
        $studentUser->givePermissionTo($studentPermissions);

        $studentUser1=User::create([
            'fname'=>'Nerd1',
            'lname'=>'Zone1',
            'password'=>'123456',
            'email'=>'nerd1@zone1.com',
            'sex'=>0,
            'section_id'=>'1'    
        ]);
        $studentUser1->assignRole($studentRole);
        $studentPermissions=$studentRole->permissions()->pluck('name')->toArray();
        $studentUser1->givePermissionTo($studentPermissions);
    }
}
