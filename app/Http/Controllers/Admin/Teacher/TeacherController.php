<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\TeacherStoreRequest;
use App\Http\Requests\Admin\Teacher\TeacherUpdateRequest;
use App\Models\Teacher\Teacher;
use App\Repositories\Admin\TeacherRepository;

class TeacherController extends Controller
{
    protected $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function index()
    {
        return view('admin.teachers.index');

    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(TeacherStoreRequest $request)
    {
        $this->teacherRepository->store($request);
        alert()->success("با تشکر", 'استاد مورد نظر با موفقیت ثبت شد');
        return redirect()->route('admin.teachers.index');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(TeacherUpdateRequest $request, Teacher $teacher)
    {

        $this->teacherRepository->update($request, $teacher);
        alert()->success("با تشکر", 'استاد مورد نظر با موفقیت ویرایش شد');
        return redirect()->route('admin.teachers.index');
    }

    public function destroy(Teacher $teacher)
    {
        $this->teacherRepository->destroy($teacher);
        return redirect()->route('admin.teachers.index');
    }
}
