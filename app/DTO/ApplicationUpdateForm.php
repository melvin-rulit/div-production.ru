<?php

namespace App\DTO;

use Illuminate\Http\Request;

class ApplicationUpdateForm
{

    public string $comment;
    public string $status;

    public function __construct(string $comment)
    {
        $this->comment = $comment;
    }

    public static function fromRequest(Request $request): self
    {
        return new static(
            $request->get('comment'),
        );
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function toArray(): array
    {
        return [
            'message' => $this->comment,
            'status' => $this->status,
        ];
    }

}
