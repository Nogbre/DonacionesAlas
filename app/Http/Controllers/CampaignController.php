<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->paginate(10);
        return view('campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaigns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:150',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
        ]);

        $path = $request->hasFile('image')
            ? $request->file('image')->store('campaigns', 'public')
            : null;

        Campaign::create([
            'title'       => $data['title'],
            'description' => $data['description'],
            'image_path'  => $path,
        ]);

        return redirect()->route('campaigns.index')->with('success', 'Campaña creada.');
    }

    public function show(Campaign $campaign)
    {
        return view('campaigns.show', compact('campaign'));
    }

    public function edit(Campaign $campaign)
    {
        return view('campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, Campaign $campaign)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:150',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'remove_image'=> 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($campaign->image_path) {
                Storage::disk('public')->delete($campaign->image_path);
            }
            $campaign->image_path = $request->file('image')->store('campaigns', 'public');
        } elseif ($request->boolean('remove_image')) {
            if ($campaign->image_path) {
                Storage::disk('public')->delete($campaign->image_path);
            }
            $campaign->image_path = null;
        }

        $campaign->title = $data['title'];
        $campaign->description = $data['description'];
        $campaign->save();

        return redirect()->route('campaigns.index')->with('success', 'Campaña actualizada.');
    }

    public function destroy(Campaign $campaign)
    {
        if ($campaign->image_path) {
            Storage::disk('public')->delete($campaign->image_path);
        }
        $campaign->delete();

        return redirect()->route('campaigns.index')->with('success', 'Campaña eliminada.');
    }
}
