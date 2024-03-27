<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyNewsRequest;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('news_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        abort_if(Gate::denies('news_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        $news = News::create($request->all());

        if ($request->input('photo', false)) {
            $news->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('admin.news.index');
    }

    public function edit(News $news)
    {
        abort_if(Gate::denies('news_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.news.edit', compact('news'));
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        $news->update($request->all());

        if ($request->input('photo', false)) {
            if (!$news->photo || $request->input('photo') !== $news->photo->file_name) {
                $news->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($news->photo) {
            $news->photo->delete();
        }

        return redirect()->route('admin.news.index');
    }

    public function show(News $news)
    {
        abort_if(Gate::denies('news_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.news.show', compact('news'));
    }

    public function destroy(News $news)
    {
        abort_if(Gate::denies('news_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsRequest $request)
    {
        News::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
