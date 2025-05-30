<?php

namespace Database\Seeders;

use App\Models\Course;
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
        $courseCount = Course::all()->count();
        Student::factory(200)->create()->each(function ($student) use ($courseCount) {
            $student->course_id = rand(1, $courseCount);
            $student->update();
        });
    }
}