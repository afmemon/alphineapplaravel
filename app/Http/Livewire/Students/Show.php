<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;

use App\Models\Student;


class Show extends Component
{
    public $student;

    public function mount(Student $student)
    {
        $this->student = $student;
    }

    public function render()
    {
        return view('livewire.students.show');
    }
}
