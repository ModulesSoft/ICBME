<?php

namespace App\Http\Controllers\Admin;

use App\Committee;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCommitteeRequest;
use App\Http\Requests\StoreCommitteeRequest;
use App\Http\Requests\UpdateCommitteeRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommitteesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('committee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $committees = Committee::all();

        return view('admin.committees.index', compact('committees'));
    }

    public function create()
    {
        abort_if(Gate::denies('committee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.committees.create');
    }

    public function store(StoreCommitteeRequest $request)
    {
        $Committee = Committee::create($request->all());

        if ($request->input('photo', false)) {
            $Committee->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('admin.committees.index');
    }

    public function edit(Committee $committee)
    {
        abort_if(Gate::denies('committee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.committees.edit', compact('committee'));
    }

    public function update(UpdateCommitteeRequest $request, Committee $Committee)
    {
        $Committee->update($request->all());

        if ($request->input('photo', false)) {
            if (!$Committee->photo || $request->input('photo') !== $Committee->photo->file_name) {
                $Committee->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($Committee->photo) {
            $Committee->photo->delete();
        }

        return redirect()->route('admin.committees.index');
    }

    public function show(Committee $committee)
    {
        abort_if(Gate::denies('committee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.committees.show', compact('committee'));
    }

    public function destroy(Committee $committee)
    {
        abort_if(Gate::denies('committee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $committee->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommitteeRequest $request)
    {
        Committee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
