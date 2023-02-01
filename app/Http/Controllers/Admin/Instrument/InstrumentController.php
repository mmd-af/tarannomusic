<?php

namespace App\Http\Controllers\Admin\Instrument;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Instrument\InstrumentStoreRequest;
use App\Http\Requests\Admin\Instrument\InstrumentUpdateRequest;
use App\Models\Instrument\Instrument;
use App\Repositories\Admin\InstrumentRepository;

class InstrumentController extends Controller
{
    protected $instrumentRepository;

    public function __construct(InstrumentRepository $instrumentRepository)
    {
        $this->instrumentRepository = $instrumentRepository;
    }

    public function index()
    {
        return view('admin.instruments.index');

    }

    public function create()
    {
        return view('admin.instruments.create');
    }

    public function store(InstrumentStoreRequest $request)
    {
        $this->instrumentRepository->store($request);
        alert()->success("با تشکر", 'ساز مورد نظر با موفقیت ثبت شد');
        return redirect()->route('admin.instruments.index');
    }

    public function edit(Instrument $instrument)
    {
        return view('admin.instruments.edit', compact('instrument'));
    }

    public function update(InstrumentUpdateRequest $request, Instrument $instrument)
    {

        $this->instrumentRepository->update($request, $instrument);
        alert()->success("با تشکر", 'ساز مورد نظر با موفقیت ویرایش شد');
        return redirect()->route('admin.instruments.index');
    }

    public function destroy(Instrument $instrument)
    {
        $this->instrumentRepository->destroy($instrument);
        return redirect()->route('admin.instruments.index');
    }
}
