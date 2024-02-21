<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $products = Product::whereNot('group_id','=' ,null)
            ->where('group_id', $this->group_id)
            ->get();
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'price' => $this->price,
            'old_price'=> $this->old_price,
            'count' => $this->count,
            'is_published' => $this->is_published,
            'category' => new CategoryResource ($this->category),
            //'image_url' => $this->imageUrl, функція в моделі Product
            'image_url' => url('storage/' . $this->preview_image),
            'group_products' => ProductMinResource::collection($products),
            'productImages' => ProductImageResource::collection($this->productImages),


        ];
    }
}
