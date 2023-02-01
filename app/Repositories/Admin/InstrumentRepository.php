<?php

namespace App\Repositories\Admin;

use App\Models\Image\Image;
use App\Models\Instrument\Instrument;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class InstrumentRepository extends BaseRepository
{
    public function __construct(Instrument $model)
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
                'description',
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
                'description',
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
                    $edit = route('admin.instruments.edit', $row->id);
                    $destroy = route('admin.instruments.destroy', $row->id);
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
        $item = new Instrument();
        $item->name = $request->input('name');
        $item->slug = SlugService::createSlug(Instrument::class, 'slug', $request->input('slug'));
        $item->description = $request->input('description');
        $item->is_active = $request->input('is_active');
        $item->save();
        $image = new Image();
        $image->url = $request->input('url');
        $item->images()->save($image);
    }

    public function update($request, $instrument)
    {
        DB::beginTransaction();
        try {
            $instrument->name = $request->input('name');
            $instrument->description = $request->input('description');
            $instrument->is_active = $request->input('is_active');
            $instrument->save();
            $instrument->images()->update(['url' => $request->input('url')]);
            DB::commit();
            return $instrument;
        } catch (\Exception $error) {
            DB::rollback();
            return $error;
        }
    }

    public function destroy($instrument)
    {
        $instrument->delete();
    }
}
