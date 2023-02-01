<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\TeacherRepository;
use Illuminate\Http\Request;

class TeacherAjaxController extends Controller
{
    protected $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }
    public function getDatatableData(Request $request)
    {
        return $this->teacherRepository->getDatatableData($request);
    }
}
