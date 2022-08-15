<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Degree;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = [
            ['user_id' => 1, 'username' => 'kasek', 'password' => md5('kasek'), 'name' =>'kasek', 'role_id' => '1', 'teacher_id' => '1', 'major_id' => '1', 'subject_id' => '1'],
            ['user_id' => 2, 'username' => 'kurikulum', 'password' => md5('kurikulum'), 'name' =>'kurikulum', 'role_id' => '2', 'teacher_id' => '1', 'major_id' => '1', 'subject_id' => '2'],
            ['user_id' => 3, 'username' => 'kesiswaan', 'password' => md5('kesiswaan'), 'name' =>'kesiswaan', 'role_id' => '3', 'teacher_id' => '2', 'major_id' => '2', 'subject_id' => '3'],
            ['user_id' => 4, 'username' => 'sarpras', 'password' => md5('sarpras'), 'name' =>'sarpras', 'role_id' => '4', 'teacher_id' => '2', 'major_id' => '3', 'subject_id' => '4'],
        ];

        $role = [
            ['role_id' => 1, 'role_name' => 'Kepala Sekolah'],
            ['role_id' => 2, 'role_name' => 'Kurikulum'],
            ['role_id' => 3, 'role_name' => 'Kesiswaan'],
            ['role_id' => 4, 'role_name' => 'Sarana Prasarana'],
            ['role_id' => 5, 'role_name' => 'Humas'],
            ['role_id' => 6, 'role_name' => 'Tata Usaha'],
            ['role_id' => 7, 'role_name' => 'Kaprodi'],
            ['role_id' => 8, 'role_name' => 'Wali Kelas'],
            ['role_id' => 9, 'role_name' => 'Bimbingan Konseling'],
            ['role_id' => 10, 'role_name' => 'Guru Pengajar'],
        ];

        $teacher = [
            ['teacher_id' => 1, 'teacher_name' => 'Non-Pengajar'],
            ['teacher_id' => 2, 'teacher_name' => 'Normatif'],
            ['teacher_id' => 3, 'teacher_name' => 'Produktif'],
        ];

        $major = [
            ['major_id' => 1, 'major_name' => 'Non-Produktif'],
            ['major_id' => 2, 'major_name' => 'Teknik Alat Berat'],
            ['major_id' => 3, 'major_name' => 'Teknik Kendaraan Ringan'],
            ['major_id' => 4, 'major_name' => 'Teknik Komputer Jaringan'],
        ];

        $subject = [
            ['subject_id' => 1, 'subject_name' => 'Non-Pengajar', 'major_id' => 1],
            ['subject_id' => 2, 'subject_name' => 'Pendidikan Agama Islam', 'major_id' => 1],
            ['subject_id' => 3, 'subject_name' => 'PKN', 'major_id' => 1],
            ['subject_id' => 4, 'subject_name' => 'Bahasa Indonesia', 'major_id' => 1],
            ['subject_id' => 5, 'subject_name' => 'Matematika', 'major_id' => 1],
        ];

        $degree = [
            ['degree_id' => 1, 'degree_name' => 'Non-Strata'],
            ['degree_id' => 2, 'degree_name' => 'Sekolah Menengah'],
            ['degree_id' => 3, 'degree_name' => 'D1'],
            ['degree_id' => 4, 'degree_name' => 'D2'],
            ['degree_id' => 5, 'degree_name' => 'D3'],
            ['degree_id' => 6, 'degree_name' => 'D4'],
            ['degree_id' => 7, 'degree_name' => 'S1'],
            ['degree_id' => 8, 'degree_name' => 'S2'],
            ['degree_id' => 9, 'degree_name' => 'S3'],
        ];

        $student = [
            ['student_id' => 1, 'student_name' => 'Andi', 'classroom_id' => 1, 'major_id' => 2, 'internship_id' => 1],
            ['student_id' => 2, 'student_name' => 'Budi', 'classroom_id' => 2, 'major_id' => 3, 'internship_id' => 2],
            ['student_id' => 3, 'student_name' => 'Candra', 'classroom_id' => 3, 'major_id' => 4, 'internship_id' => 3],
        ];

        User::insert($user);
        Role::insert($role);
        Teacher::insert($teacher);
        Major::insert($major);
        Subject::insert($subject);
        Degree::insert($degree);
        Student::insert($student);
    }
}
