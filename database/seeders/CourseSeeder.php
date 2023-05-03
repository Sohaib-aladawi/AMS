<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=[
            [
                'course_id' => 'UNEN1102',
                'course_name' => 'English I',
                'prerequisite' => 'None',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSDB1102',
                'course_name' => 'Introduction to Database',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSWD1103',
                'course_name' => 'Web Development I',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSPG1205',
                'course_name' => 'Introduction to Programming',
                'prerequisite' => 'CSCM1101',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSCM1101',
                'course_name' => 'Fundamentals of Computing and Information Systems',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'MATH1202',
                'course_name' => 'Calculus I',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSCN1104',
                'course_name' => 'Computer Networking Fundamentals',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'UNEN1203',
                'course_name' => 'English II',
                'prerequisite' => 'UNEN1102',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSOP1207',
                'course_name' => 'Principles of Operating Systems',
                'prerequisite' => 'CSCM1101',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSSY1208',
                'course_name' => 'Introduction to Information Security',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSWD2101',
                'course_name' => 'Web Development II',
                'prerequisite' => 'CSWD1103',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSDS2101',
                'course_name' => 'Database Systems',
                'prerequisite' => 'CSDB1102',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSSE2101',
                'course_name' => 'Introduction to Software Engineering',
                'prerequisite' => 'CSCM1101',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'MATH2101',
                'course_name' => 'Mathematics for Computing',
                'prerequisite' => 'MATH1202',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSSE2202',
                'course_name' => 'Object Oriented Programming',
                'prerequisite' => 'CSPG1205',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'UNEP2109',
                'course_name' => 'Entrepreneurship',
                'prerequisite' => 'UNEN1203',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSSE2203',
                'course_name' => 'Data Structures and Algorithms',
                'prerequisite' => 'CSPG1205',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSSE2204',
                'course_name' => 'Special Topics',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'CSSE2205',
                'course_name' => 'Diploma Course Project',
                'prerequisite' => 'CSSE2101, CSPG1205',
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 'UNCL2211',
                'course_name' => 'Chinese Language',
                'prerequisite' => null,
                'course_version' => 5,
                'credit_hours' => 3,
                'passing_mark' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            



        ];
        Course::insert($courses);
    }
}
