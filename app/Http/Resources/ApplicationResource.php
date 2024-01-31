<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
          'id' => $this->resource->id,
          'name' => $this->resource->name,
          'email' => $this->resource->email,
          'status' => $this->resource->status,
          'message' => $this->resource->message,
          'comment' => $this->resource->comment,
          'created_at' => Carbon::createFromDate($this->resource->created_at)->format('d-m-Y'),
          'updated_at' => Carbon::createFromDate($this->resource->updated_at)->format('d-m-Y'),
        ];
    }
}
