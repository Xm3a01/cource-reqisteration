<?php 

namespace App\Traits;


trait HasImage {

    public function storeImage($model , $image , $collection)
    {
        $model->addMedia($image)->preservingOriginal()->toMediaCollection($collection);
    }

    public function deleteImage($model , $image = null, $collection)
    {
        $model->clearMediaCollection($collection);
    }
}