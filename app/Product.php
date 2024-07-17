<?php

namespace app;

class Product
{
    private string $title;
    private string $description;
    private int|float $price;
    private string $image;
    private int $category_id;
    public function __construct(string $title, string $description, int|float $price, string $image, int $category_id)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category_id = $category_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float|int
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    public function toArray(): array{
        return [
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image,
            'category_id' => $this->category_id,
        ];
    }

}