<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DashboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'total_pengunjung' => $this->totalPengunjung,
            'total_articles' => $this->totalArticles,
            'active_users' => $this->activeUsers,
            'recent_articles' => $this->recentArticles,
            'distribusi_articles' => $this->distribusiArticles,
        ];
    }
}
