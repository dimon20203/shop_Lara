<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Формируем URL изображения, используя путь к файлу

        $imageUrl = url(Storage::url($this->file_path));
        return [
            'id' => $this->id,
           // 'url' => $this->imageUrl, функція в моделі ProductImage
            'url' => $imageUrl,
            'product_id' => $this->product_id,
        ];
    }
}
