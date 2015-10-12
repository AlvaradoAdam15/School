<?php

namespace Com\Iesebre\Dam2\adamalvarado\resume;


use Com\Iesebre\Dam2\adamalvarado\persons\Teacher;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:43
 */

class Lesson extends StudySubModule{

    public $descriptionLesson;  //Description an one hour in class

    public $teacher; //Teacher

    public $classGroup;

    /**
     * Lesson constructor.
     * @param $teacher
     * @param $classGroup
     */
    public function __construct(Teacher $teacher, ClassGroup $classGroup)
    {
        $this->teacher = $teacher;
        $this->classGroup = $classGroup;
    }

    /**
     * @return mixed
     */
    public function getDescriptionLesson()
    {
        return $this->descriptionLesson;
    }

    /**
     * @param mixed $descriptionLesson
     */
    public function setDescriptionLesson($descriptionLesson)
    {
        $this->descriptionLesson = $descriptionLesson;
    }

}