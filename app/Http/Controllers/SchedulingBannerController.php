<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\SchedulingBanner;

class SchedulingBannerController extends Controller
{
    public function all(SchedulingBanner $schedulingBanner)
    {
        $data = $schedulingBanner->select(
            'image',
            'image_mobile',
            'link'
        )
        ->where('status', true)
        ->orderBy('created_at', 'desc')
        ->get();

        $data = $data->map(function ($item) {
            return [
                'image' => $item->image ? __url($item->image) : null,
                'image_mobile' => $item->image_mobile ? __url($item->image_mobile) : null,
                'link' => $item->link
            ];
        });

        return $data;
    }

    public function getWatched(Request $request, Episode $episode)
    {
        $watchedIds = $request->input('watched_ids', []);

        $watchedEpisodes = $episode->select(
            'playlists.slug',
            'episodes.id',
            'episodes.episode',
            'episodes.thumbnail',
            'episodes.season_id'
        )
            ->join('playlists', 'episodes.playlist_id', '=', 'playlists.id')
            ->whereIn('episodes.id', $watchedIds)
            ->get();

        $orderedWatchedEpisodes = [];
        foreach ($watchedIds as $watchedId) {
            foreach ($watchedEpisodes as $episode) {
                if ($episode->id == $watchedId) {
                    $orderedWatchedEpisodes[] = [
                        'id' => $episode->id,
                        'slug' => $episode->slug,
                        'episode' => $episode->episode,
                        'thumbnail' => $episode->thumbnail ? __url($episode->thumbnail) : null,
                        'season_id' => $episode->season_id
                    ];
                    break;
                }
            }
        }

        return $orderedWatchedEpisodes;
    }
}
