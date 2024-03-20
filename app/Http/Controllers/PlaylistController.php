<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function banners(Playlist $playlist)
    {
        $data = $playlist->select(
            'slug',
            'logo',
            'banner_home_image',
            'banner_home_description',
            'banner_home_button_link',
            'banner_home_button_text'
        )
            ->where('banner_home_active', true)
            ->orderBy('order', 'asc')
            ->get();

        $data = $data->map(function ($item) {
            return [
                'slug' => $item->slug,
                'logo' => $item->logo ? __url($item->logo) : null,
                'background' => $item->banner_home_image ? __url($item->banner_home_image) : null,
                'description' => $item->banner_home_description,
                'buttonLink' => $item->banner_home_button_link,
                'buttonText' => $item->banner_home_button_text
            ];
        });

        return $data;
    }

    public function list(Playlist $playlist)
    {
        $data = $playlist->select(
            'id',
            'title',
            'slug',
            'thumbnail',
            'order'
        )
            ->orderBy('title', 'asc')
            ->get();

        $data = $data->map(function ($item) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'slug' => $item->slug,
                'thumbnail' => $item->thumbnail ? __url($item->thumbnail) : null,
                'order' => $item->order
            ];
        });

        return $data;
    }

    public function get(Playlist $playlist, $slug)
    {
        $data = $playlist->select(
            'id',
            'title',
            'description',
            'image',
            'logo',
            'slug',
        )
            ->where('slug', $slug)
            ->first();

        $data->image = $data->image ? __url($data->image) : null;
        $data->logo = $data->logo ? __url($data->logo) : null;

        if (empty($data)) return [];

        $oEpi = new Episode();

        $episodes = $oEpi->select(
            'id',
            'season_id',
            'title',
            'url_video',
            'description',
            'episode',
            'duration',
            'thumbnail'
        )
            ->where('playlist_id', $data->id)
            ->get();

        $items = [];

        foreach ($episodes as $epi) {
            $items[$epi->season_id]['id'] = $epi->season_id;
            $items[$epi->season_id]['season'] = $epi->season_id;
            $items[$epi->season_id]['episodes'][] = [
                'id' => $epi->id,
                'season_id' => $epi->season_id,
                'title' => $epi->title,
                'url_video' => $epi->url_video,
                'description' => $epi->description,
                'episode' => $epi->episode,
                'duration' => $epi->duration,
                'thumbnail' => $epi->thumbnail ? __url($epi->thumbnail) : null,
                'thumbnail_top_five' => $epi->thumbnail_top_five ? __url($epi->thumbnail_top_five) : null
            ];
        }

        return array_merge($data->toArray(), ["seasons" => array_values($items)]);
    }
}
