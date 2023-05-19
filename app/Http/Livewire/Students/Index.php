<?php

namespace App\Http\Livewire\Students;

use Illuminate\Support\Facades\Cache;

use Livewire\Component;

use App\Models\Student;


class Index extends Component
{
    public function render()
    {
        // return view('livewire.students.index');
        // $students = Student::all();

        $students = Cache::remember('students_list', 60 * 60, function () {
            return Student::all();
        });

        return view('livewire.students.index', compact('students'));
    }
}
