<?php 

namespace App\Traits;


trait HasImage {

    public function storeImage($model , $image , $collection)
    {
        $model->addMedia($image)->preservingOriginal()->toMediaCollection($collection);
    }

    public function deleteImage($model , $image , $collection)
    {
        $model->clearMediaCollection($collection);
    }
}