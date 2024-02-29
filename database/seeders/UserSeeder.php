<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use App\Models\User;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('JayalahHimpunanku'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($admin));
        $admin->assignRole('superadmin');
        
        $adminhmif = User::create([
            'name' => 'adminhmif',
            'email' => 'adminhmif@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('JayalahHimpunanku'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($adminhmif));
        $adminhmif->assignRole('adminhmif');
        
        $psdm = User::create([
            'name' => 'psdm',
            'email' => 'psdm@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('divisipsdm'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($psdm));
        $psdm->assignRole('divisi');
        
        $humas = User::create([
            'name' => 'humas',
            'email' => 'humas@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('divisihumas'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($humas));
        $humas->assignRole('divisi');

        $litbang = User::create([
            'name' => 'litbang',
            'email' => 'litbang@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('divisilitbang'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($litbang));
        $litbang->assignRole('divisi');

        $kwu = User::create([
            'name' => 'kwu',
            'email' => 'kwu@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('divisikwu'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($kwu));
        $kwu->assignRole('divisi');

        $mediatek = User::create([
            'name' => 'mediatek',
            'email' => 'mediatek@hmifunej.id',
            'email_verified_at' => now(),
            'password' => bcrypt('divisimediatek'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($mediatek));
        $mediatek->assignRole('divisi');
        
        $mahasiswa = User::create([
            'name' => 'Afif Rohul Abrori',
            'email' => '212410103044@mail.unej.ac.id',
            'email_verified_at' => now(),
            'password' => bcrypt('afifafif'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        event(new Registered($mahasiswa));
        $mahasiswa->assignRole('mahasiswa');
    }
}
