<?php

$students = array();

function generateStudents($qty = 5)
{
    global $students;

    for ($i = 0; $i < $qty; $i++) {
        array_push($students,  ['name' => 'Student ' . $i]);
    };
}

function addNotesToStudents()
{

    global $students;
    foreach ($students as $key => $student) {

        $students[$key]['notas'] = [
            'parcial1' => rand(5, 10),
            'parcial2' => rand(5, 10),
        ];
    }
}

function addAssistToStudents()
{
    global $students;
    foreach ($students as $key =>  $student) {
        $students[$key]['assist'] = rand(1, 40);
        $students[$key]['assist_percentage'] = ($students[$key]['assist'] / 40) * 100;
    }
}


function calculateStudentStatus()
{
    global $students;
    foreach ($students as $key => $student) {
        $status = verifyStudentStatus($student);
        $students[$key] = [
            'name' => $student['name'],
            'notas' => $student['notas'],
            'assist' => $student['assist'],
            'assist_percentage' => $student['assist_percentage'],
            'status' => $status
        ];
    }
}

function verifyStudentStatus($student)
{
    $regular_student = $student['notas']['parcial1'] >= 8 && $student['notas']['parcial2'] >= 8 &&  $student['assist_percentage'] >= 80 ? 'Alumno Regular' : null;

    $student_need_help = $student['notas']['parcial1'] > 8 && $student['notas']['parcial2'] > 8 &&  $student['assist_percentage'] < 80 ? 'Debe realizar clases de apoyo' : null;

    $student_disapproved = ($student['notas']['parcial1'] < 8 xor $student['notas']['parcial2'] < 8) &&  $student['assist_percentage'] >= 80 ? 'Debe recuperar un parcial' : null;

    if ($regular_student) {
        return $regular_student;
    } elseif ($student_need_help) {
        return $student_need_help;
    } elseif ($student_disapproved) {
        return $student_disapproved;
    } else {
        return 'Alumno libre';
    }
}

// $students = calculateStudentStatus(addAssistToStudents(addNotesToStudents(generateStudents(10))));

generateStudents(10);

addNotesToStudents();

addAssistToStudents();

calculateStudentStatus();


echo "<pre>";
    print_r($students);
echo "</pre>";
