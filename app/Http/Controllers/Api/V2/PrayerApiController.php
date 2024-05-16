<?php

namespace App\Http\Controllers\Api\V2;

use App\Helpers\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\Resources\BlogResource;
use App\Http\Resources\BooksResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PrayerResource;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\Prayer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrayerApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $prayers=  Prayer::paginate(6);

        //$books=Book::where('approved',true)->orderBy('id','desc')->paginate(6);
        return JsonResponse::success(PrayerResource::collection($prayers));
    }

    public function show(Prayer $prayer)
    {
        return JsonResponse::success(PrayerResource::make($prayer));
    }

     /*
    public function categories(){

      $cats=Category::where('type','blogs')->get();
        return JsonResponse::success(CategoryResource::collection($cats));
    }




    public function by_category($id){

        $blogs=Blog::where('category_id',$id)->orderBy('id','desc')->get();
        return JsonResponse::success(BlogResource::collection($blogs));
    }*/


}
