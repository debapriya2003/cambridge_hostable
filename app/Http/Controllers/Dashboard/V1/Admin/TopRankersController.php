<?php

namespace App\Http\Controllers\Dashboard\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTopRankerRequest;
use App\Models\TopRanker;
use App\Services\Dashboard\TopRankerService;
use Exception;
use Illuminate\Support\Facades\Log;

class TopRankersController extends Controller
{
    protected $service;

    public function __construct(TopRankerService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $topRankers = TopRanker::latest()->get();
        return view('dashboard.admins.pages.top_rankers.index', compact('topRankers'));
    }


    public function create()
    {
        return view('dashboard.admins.pages.top_rankers.create');
    }

    public function store(StoreTopRankerRequest $request)
    {
        Log::debug("Save top rankers::  " . print_r($request->all(), true));

        try {
            $validated_data = $request->validated();

            $photo_name = $this->service->uploadPhoto($validated_data['photo'] ?? '');

            $data = array_merge(
                $validated_data,
                ['image' => $photo_name],
            );
               
            // dd($data);
            TopRanker::create($data);
        } catch (Exception $e) {
            Log::error("SAVE_TOP_RANKER_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->route('dashboard.admins.topRanker.index')->with('danger-message', 'Unable to create top ranker');
        }

        return redirect()->route('dashboard.admins.topRanker.index')->with('success-message', 'Top Ranker added successfully');
    }

    public function show(TopRanker $topRanker)
    {
        return view('dashboard.admins.pages.top_rankers.show', compact('topRanker'));
    }

    public function edit(TopRanker $topRanker)
    {
        return view('dashboard.admins.pages.top_rankers.edit', compact('topRanker'));
    }


    public function update(StoreTopRankerRequest $request, TopRanker $topRanker)
    {
        // dd($request->all());
        Log::debug("update topRanker::  " . print_r($request->all(), true));

        try {

            $validated_data = $request->validated();
            $photo_name = $topRanker->image;

            if (isset($validated_data['photo'])) {
                $photo_name = $this->service->uploadPhoto($validated_data['photo'] ?? '');
            }

            $data = array_merge(
                $validated_data,
                ['image' => $photo_name],
            );
            $topRanker->update($data);

            return redirect()->route('dashboard.admins.topRanker.index')->with('success-message', 'Top Ranker Updated successfully');
        } catch (Exception $e) {
            Log::error("UPDATE_TOP_RANKER_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->route('dashboard.admins.topRanker.index')->with('danger-message', 'Unable to update top ranker! Try again');
        }
    }

    public function destroy(TopRanker $topRanker)
    {
        try {
            if ($topRanker->delete()) {
                return redirect()->route('dashboard.admins.topRanker.index')->with('success-message', 'Top Ranker deleted successfully');
            }
        } catch (\Exception $e) {
            Log::error("DELETE_TOP_RANKER_EXCEPTION | " . print_r($e->getMessage(), true));
        }

        return redirect()->route('dashboard.admins.topRanker.index')->with('danger-message', 'Unable to delete top ranker');
    }
}
