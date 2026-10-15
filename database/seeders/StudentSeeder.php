<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'TJ',
            'email' => 'tj@mail.com',
            'phone' => '01534575857',
            'department' => 'BBA',
            'age' => 30,
        ]);

        Student::create([
            'name' => 'Rahim Ahmed',
            'email' => 'rahim.ahmed@mail.com',
            'phone' => '01712345678',
            'department' => 'CSE',
            'age' => 21,
        ]);

        Student::create([
            'name' => 'Nusrat Jahan',
            'email' => 'nusrat.jahan@mail.com',
            'phone' => '01823456789',
            'department' => 'English',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Sakib Hasan',
            'email' => 'sakib.hasan@mail.com',
            'phone' => '01934567890',
            'department' => 'BBA',
            'age' => 23,
        ]);

        Student::create([
            'name' => 'Jannatul Ferdous',
            'email' => 'jannatul.ferdous@mail.com',
            'phone' => '01323456789',
            'department' => 'English',
            'age' => 21,
        ]);

        Student::create([
            'name' => 'Rafiul Karim',
            'email' => 'rafiul.karim@mail.com',
            'phone' => '01612345678',
            'department' => 'CSE',
            'age' => 23,
        ]);

        Student::create([
            'name' => 'Imran Kabir',
            'email' => 'imran.kabir@mail.com',
            'phone' => '01890123456',
            'department' => 'Accounting',
            'age' => 25,
        ]);

        Student::create([
            'name' => 'Ayesha Siddika',
            'email' => 'ayesha.siddika@mail.com',
            'phone' => '01789012345',
            'department' => 'BBA',
            'age' => 20,
        ]);

        Student::create([
            'name' => 'Fahim Rahman',
            'email' => 'fahim.rahman@mail.com',
            'phone' => '01578901234',
            'department' => 'EEE',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Mim Akter',
            'email' => 'mim.akter@mail.com',
            'phone' => '01467890123',
            'department' => 'Law',
            'age' => 21,
        ]);

        Student::create([
            'name' => 'Tanvir Hossain',
            'email' => 'tanvir.hossain@mail.com',
            'phone' => '01356789012',
            'department' => 'CSE',
            'age' => 24,
        ]);

        Student::create([
            'name' => 'Sumaiya Akter',
            'email' => 'sumaiya.akter@mail.com',
            'phone' => '01645678901',
            'department' => 'Economics',
            'age' => 20,
        ]);
    }
}


// public function run(): void
// {
//     $students = [
//         [
//             'name' => 'Rafiul Karim',
//             'email' => 'rafiul.karim@mail.com',
//             'phone' => '01612345678',
//             'department' => 'CSE',
//             'age' => 23,
//         ],
//         [
//             'name' => 'Jannatul Ferdous',
//             'email' => 'jannatul.ferdous@mail.com',
//             'phone' => '01323456789',
//             'department' => 'English',
//             'age' => 21,
//         ],
//     ];

//     foreach ($students as $student) {
//         Student::updateOrCreate(
//             ['email' => $student['email']],
//             $student
//         );
//     }
// }