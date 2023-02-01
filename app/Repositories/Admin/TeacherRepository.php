<?php

namespace App\Repositories\Admin;

use App\Models\Image\Image;
use App\Models\Teacher\Teacher;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TeacherRepository extends BaseRepository
{
    public function __construct(Teacher $model)
    {
        $this->setModel($model);
    }

    public function getAll()
    {
        return $this->query()
            ->select([
                'id',
                'name',
                'slug',
                'bio',
                'teach',
                'is_active'
            ])
            ->get();
    }

    public function getLatest()
    {
        return $this->query()
            ->select([
                'id',
                'name',
                'slug',
                'bio',
                'teach',
                'is_active'
            ])
            ->latest()
            ->paginate(10);

    }

    public function getDatatableData($request)
    {
        if ($request->ajax()) {
            $data = $this->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('admin.teachers.edit', $row->id);
                    $destroy = route('admin.teachers.destroy', $row->id);
                    $c = csrf_field();
                    $m = method_field('DELETE');
                    return
                        "
                    <div class='d-flex justify-content-center'>
                    <a href='{$edit}' class='btn btn-outline-info btn-sm mx-2'>ویرایش</a>
                    <form action='{$destroy}' method='POST' id='myForm'>
                    $c
                    $m
                    <button type='submit' onclick='fireSweetAlert(form); return false' class='btn btn-sm btn-outline-danger'>حذف</button>
                    </form>
                    </div>
                    ";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }


    public function store($request)
    {
        $item = new Teacher();
        $item->name = $request->input('name');
        $item->slug = SlugService::createSlug(Teacher::class, 'slug', $request->input('slug'));
        $item->bio = $request->input('bio');
        $item->teach = $request->input('teach');
        $item->is_active = $request->input('is_active');
        $item->save();
        $image = new Image();
        $image->url = $request->input('url');
        $item->images()->save($image);
    }

    public function update($request, $teacher)
    {
        DB::beginTransaction();
        try {
            $teacher->name = $request->input('name');
            $teacher->bio = $request->input('bio');
            $teacher->teach = $request->input('teach');
            $teacher->is_active = $request->input('is_active');
            $teacher->save();
            $teacher->images()->update(['url' => $request->input('url')]);
            DB::commit();
            return $teacher;
        } catch (\Exception $error) {
            DB::rollback();
            return $error;
        }
    }

    public function destroy($teacher)
    {
        $teacher->delete();
    }

}
