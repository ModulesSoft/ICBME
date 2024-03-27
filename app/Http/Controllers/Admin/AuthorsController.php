<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAuthorRequest;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('author_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $authors = Author::all();

        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        abort_if(Gate::denies('author_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.authors.create');
    }

    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->all());

        if ($request->input('photo', false)) {
            $author->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('admin.authors.index');
    }

    public function edit(Author $author)
    {
        abort_if(Gate::denies('author_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.authors.edit', compact('author'));
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->all());

        if ($request->input('photo', false)) {
            if (!$author->photo || $request->input('photo') !== $author->photo->file_name) {
                $author->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($author->photo) {
            $author->photo->delete();
        }

        return redirect()->route('admin.authors.index');
    }

    public function show(Author $author)
    {
        abort_if(Gate::denies('author_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.authors.show', compact('author'));
    }

    public function destroy(Author $author)
    {
        abort_if(Gate::denies('author_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $author->delete();

        return back();
    }

    public function massDestroy(MassDestroyAuthorRequest $request)
    {
        Author::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
