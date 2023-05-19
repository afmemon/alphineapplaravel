<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;

use App\Models\Student;

class Create extends Component
{
    public $name;
    public $grade;
    public $department;

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'grade' => 'required',
            'department' => 'required',
        ]);

        Student::create($validatedData);

        session()->flash('message', 'Student created successfully.');

        $this->reset();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.students.create', [
            "name" => $this->name,
            "grade" => $this->grade,
            "department" => $this->department,
        ]);
    }
}
