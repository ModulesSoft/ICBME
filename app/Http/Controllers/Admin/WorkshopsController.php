<?php

namespace App\Http\Controllers\Admin;

use App\Workshop;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWorkshopRequest;
use App\Http\Requests\StoreWorkshopRequest;
use App\Http\Requests\UpdateWorkshopRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkshopsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('workshop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workshops = Workshop::all();

        return view('admin.workshops.index', compact('workshops'));
    }

    public function create()
    {
        abort_if(Gate::denies('workshop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workshops.create');
    }

    public function store(StoreWorkshopRequest $request)
    {
        $Workshop = Workshop::create($request->all());

        if ($request->input('photo', false)) {
            $Workshop->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('admin.workshops.index');
    }

    public function edit(Workshop $workshop)
    {
        abort_if(Gate::denies('workshop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workshops.edit', compact('workshop'));
    }

    public function update(UpdateWorkshopRequest $request, Workshop $Workshop)
    {
        $Workshop->update($request->all());

        if ($request->input('photo', false)) {
            if (!$Workshop->photo || $request->input('photo') !== $Workshop->photo->file_name) {
                $Workshop->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($Workshop->photo) {
            $Workshop->photo->delete();
        }

        return redirect()->route('admin.workshops.index');
    }

    public function show(Workshop $workshop)
    {
        abort_if(Gate::denies('workshop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workshops.show', compact('workshop'));
    }

    public function destroy(Workshop $workshop)
    {
        abort_if(Gate::denies('workshop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workshop->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkshopRequest $request)
    {
        Workshop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
