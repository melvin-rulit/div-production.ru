<?php

namespace App\DTO;

use Illuminate\Http\Request;

class ApplicationCreateForm
{
    public string $name;
    public string $email;
    public string $message;

    public function __construct(string $name, string $email, string $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public static function fromRequest(Request $request): ApplicationCreateForm
    {
        return new static(
            $request->get('name'),
            $request->get('email'),
            $request->get('message'),
        );
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];
    }

}
