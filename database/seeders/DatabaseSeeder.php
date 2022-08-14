<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\Major;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $role = [
            ['role_id' => 1, 'role_name' => 'Kepala Sekolah'],
            ['role_id' => 2, 'role_name' => 'Kurikulum'],
            ['role_id' => 3, 'role_name' => 'Kesiswaan'],
            ['role_id' => 4, 'role_name' => 'Sarana Prasarana']
        ];

        $teacher = [
            ['teacher_id' => 1, 'teacher_name' => 'Non Pengajar'],
            ['teacher_id' => 2, 'teacher_name' => 'Normatif'],
            ['teacher_id' => 3, 'teacher_name' => 'Produktif']
        ];

        $major = [
            ['major_id' => 1, 'major_name' => 'Non Produktif'],
            ['major_id' => 2, 'major_name' => 'Teknik Alat Berat'],
            ['major_id' => 3, 'major_name' => 'Teknik Kendaraan Ringan'],
            ['major_id' => 4, 'major_name' => 'Teknik Komputer Jaringan']
        ];

        $subject = [
            ['subject_id' => 1, 'subject_name' => 'Pendidikan Agama Islam', 'major_id' => 1],
            ['subject_id' => 2, 'subject_name' => 'PKN', 'major_id' => 1],
            ['subject_id' => 3, 'subject_name' => 'Bahasa Indonesia', 'major_id' => 1],
            ['subject_id' => 4, 'subject_name' => 'Matematika', 'major_id' => 1]
        ];
        
        $user = [
            ['user_id' => 1, 'username' => 'kasek', 'password' => md5('kasek'), 'name' =>'kasek', 'role_id' => '1', 'teacher_id' => '1', 'major_id' => '1', 'subject_id' => '1'],
            ['user_id' => 2, 'username' => 'kurikulum', 'password' => md5('kurikulum'), 'name' =>'kurikulum', 'role_id' => '2', 'teacher_id' => '1', 'major_id' => '1', 'subject_id' => '2'],
            ['user_id' => 3, 'username' => 'kesiswaan', 'password' => md5('kesiswaan'), 'name' =>'kesiswaan', 'role_id' => '3', 'teacher_id' => '2', 'major_id' => '2', 'subject_id' => '3'],
            ['user_id' => 4, 'username' => 'sarpras', 'password' => md5('sarpras'), 'name' =>'sarpras', 'role_id' => '4', 'teacher_id' => '2', 'major_id' => '3', 'subject_id' => '4']
        ];

        Role::insert($role);
        Teacher::insert($teacher);
        Major::insert($major);
        Subject::insert($subject);
        User::insert($user);
    }
}
