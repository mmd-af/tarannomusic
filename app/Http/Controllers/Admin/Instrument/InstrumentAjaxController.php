<?php

namespace App\Http\Controllers\Admin\Instrument;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\InstrumentRepository;
use Illuminate\Http\Request;

class InstrumentAjaxController extends Controller
{
    protected $instrumentRepository;

    public function __construct(InstrumentRepository $instrumentRepository)
    {
        $this->instrumentRepository = $instrumentRepository;
    }
    public function getDatatableData(Request $request)
    {
        return $this->instrumentRepository->getDatatableData($request);
    }
}
