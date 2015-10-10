<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:49
 */

namespace Com\Iesebre\Dam2\adamalvarado\resume;

use Com\Iesebre\Dam2\adamalvarado\persons\Student;

class ClassGroup
{
    public $students = array(); //Array students

    /**
     * ClassGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function addStudent(Student $student)
    {
        array_push($students, $student);

    }

    /**
     * @return array
     * Getter Students
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     * Setter Students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }
}