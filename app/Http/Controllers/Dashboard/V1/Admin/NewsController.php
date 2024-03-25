<?php

namespace App\Http\Controllers\Dashboard\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use App\Services\Dashboard\NewsService;
use Exception;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    protected $service;

    public function __construct(NewsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $newses = News::latest()->get();
        return view('dashboard.admins.pages.newses.index', compact('newses'));
    }


    public function create()
    {
        return view('dashboard.admins.pages.newses.create');
    }

    public function store(StoreNewsRequest $request)
    {
        Log::debug("Save news::  " . print_r($request->all(), true));

        try {
            $validated_data = $request->validated();

            $photo_name = $this->service->uploadPhoto($validated_data['photo'] ?? '');
            $pdf_name = $this->service->uploadDoc($validated_data['pdf'] ?? '');

            $data = array_merge(
                $validated_data,
                ['image' => $photo_name],
                ['pdf' => $pdf_name]
            );
               
            // dd($data);
            News::create($data);
        } catch (Exception $e) {
            Log::error("SAVE_NEWS_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->route('dashboard.admins.news.index')->with('danger-message', 'Unable to create news');
        }

        return redirect()->route('dashboard.admins.news.index')->with('success-message', 'News added successfully');
    }

    public function show(News $news)
    {
        return view('dashboard.admins.pages.newses.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('dashboard.admins.pages.newses.edit', compact('news'));
    }


    public function update(StoreNewsRequest $request, News $news)
    {
        // dd($request->all());
        Log::debug("update news::  " . print_r($request->all(), true));

        try {

            $validated_data = $request->validated();
            $photo_name = $news->image;
            $pdf_name = $news->pdf;

            if (isset($validated_data['photo'])) {
                $photo_name = $this->service->uploadPhoto($validated_data['photo'] ?? '');
            }

            if (isset($validated_data['pdf'])) {
                $pdf_name = $this->service->uploadDoc($validated_data['pdf'] ?? '');
            }

            $data = array_merge(
                $validated_data,
                ['image' => $photo_name],
                ['pdf' => $pdf_name]
            );
            $news->update($data);

            return redirect()->route('dashboard.admins.news.index')->with('success-message', 'News Updated successfully');
        } catch (Exception $e) {
            Log::error("UPDATE_NEWS_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->route('dashboard.admins.news.index')->with('danger-message', 'Unable to update news! Try again');
        }
    }

    public function destroy(News $news)
    {
        // dd($news->email);
        try {
            if ($news->delete()) {
                return redirect()->route('dashboard.admins.news.index')->with('success-message', 'News deleted successfully');
            }
        } catch (\Exception $e) {
            Log::error("DELETE_NEWS_EXCEPTION | " . print_r($e->getMessage(), true));
        }

        return redirect()->route('dashboard.admins.news.index')->with('danger-message', 'Unable to delete news');
    }
}
