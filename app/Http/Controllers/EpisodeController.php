<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function news(Episode $episode)
    {
        $data = $episode->select(
            'playlists.slug',
            'episodes.id',
            'episodes.episode',
            'episodes.thumbnail',
            'episodes.thumbnail_top_five',
            'episodes.season_id'
        )
            ->join('playlists', 'episodes.playlist_id', '=', 'playlists.id')
            ->orderBy('episodes.created_at', 'desc')
            ->get();

            $data = $data->map(function ($item) {
                return [
                    'id' => $item->id,
                    'slug' => $item->slug,
                    'episode' => $item->episode,
                    'thumbnail' => $item->thumbnail ? __url($item->thumbnail) : null,
                    'thumbnail_top_five' => $item->thumbnail_top_five ? __url($item->thumbnail_top_five) : null,
                    'season_id' => $item->season_id
                ];
            });

            return $data;

        return $data;
    }

    public function topFive(Episode $episode)
    {
        $data = $episode->select(
            'episodes.id',
            'playlists.slug',
            'episodes.episode',
            'episodes.thumbnail',
            'episodes.thumbnail_top_five',
            'episodes.season_id'
        )
            ->join('playlists', 'episodes.playlist_id', '=', 'playlists.id')
            ->orderBy('episodes.updated_at', 'desc')
            ->where('episodes.top_five', true)
            ->limit(5)
            ->get();

            $data = $data->map(function ($item) {
                return [
                    'id' => $item->id,
                    'slug' => $item->slug,
                    'episode' => $item->episode,
                    'thumbnail' => $item->thumbnail ? __url($item->thumbnail) : null,
                    'thumbnail_top_five' => $item->thumbnail_top_five ? __url($item->thumbnail_top_five) : null,
                    'season_id' => $item->season_id
                ];
            });

        return $data;
    }

    public function all(Episode $episode)
    {
        $data = $episode->select(
            'episodes.id',
            'playlists.slug',
            'episodes.episode',
            'episodes.thumbnail',
            'episodes.thumbnail_top_five',
            'episodes.season_id'
        )
            ->join('playlists', 'episodes.playlist_id', '=', 'playlists.id')
            ->orderBy('episodes.created_at', 'desc')
            ->get();

            $data = $data->map(function ($item) {
                return [
                    'id' => $item->id,
                    'slug' => $item->slug,
                    'episode' => $item->episode,
                    'thumbnail' => $item->thumbnail ? __url($item->thumbnail) : null,
                    'thumbnail_top_five' => $item->thumbnail_top_five ? __url($item->thumbnail_top_five) : null,
                    'season_id' => $item->season_id
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
