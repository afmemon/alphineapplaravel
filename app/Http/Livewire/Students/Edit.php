<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;

use App\Models\Student;


class Edit extends Component
{
    public $studentId, $name, $grade, $department;

    public function mount(Student $student)
    {
        $this->studentId = $student->id;
        $this->name = $student->name;
        $this->grade = $student->grade;
        $this->department = $student->department;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'grade' => 'required',
            'department' => 'required',
        ]);

        $student = Student::find($this->studentId);
        $student->update($validatedData);

        session()->flash('message', 'Student updated successfully.');

        $this->reset();

        // return redirect()->name("livewire.students.index");

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.students.edit');
    }
}
