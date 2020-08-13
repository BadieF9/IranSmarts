<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    protected function uploadImages($files, $usage)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/images/{$usage}/{$year}/";
        $filename[] = null;
        $files[] = null;
        foreach ($files as $file){
            $filename = $file->getClientOriginalName();
            $files = $file->move(public_path($imagePath) , $filename);
            $url['images'] = $this->resize($files->getrealPath(), $imagePath, $filename);
        }
        return $url;
    }
    private function resize($path, $imagePath, $filename)
    {
        $images = $imagePath . 'resized' . $filename;
        Image::make($path)->resize(600, 400)->save(public_path($images));
    }
}
