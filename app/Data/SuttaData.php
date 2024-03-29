<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class SuttaData extends Data
{
    public string $category; // an

    public string $order; // 2

    public ?string $suborder; // 15

    public string $title;

    public ?string $subtitle;

    public ?string $description;

    public array $contentWithMarks; // ['p1' => 'Так я слышал']

    public function __construct(string $category, string $order, ?string $suborder, string $title, array $contentWithMarks)
    {
        $this->category = $category; // an
        $this->order = $order; // 1
        $this->suborder = $suborder; // 15 или 1-10
        $this->title = $title;
        $this->contentWithMarks = $contentWithMarks;
        $this->description = '';
    }

    public function name(): string // an2.15
    {
        $name = $this->category.$this->order;
        if ($this->suborder) {
            $name .= '.'.$this->suborder;
        }

        return $name;
    }
}
