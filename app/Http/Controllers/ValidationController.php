<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public static function sliders(){
        return request()->validate([
            "title"=>"string | between:4,100 | required ",
            "content"=>"string | required ",
            "subscribe_text"=> "string | required ",
            "main_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "phone_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "show_input"=>"integer  | required ",
        ]);
    }

    public static function about_us(){
        return request()->validate([
            "head"=>"string | between:4,100  ",
            "head_text"=>"string  ",
            "btn_name"=>"string | between:3,100  ",
            "btn_link"=>"string | between:8,100  ",
            "sentences"=>"string | between:8,100 ",
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "text"=>"string    ",
        ]);
    }
    public static function projects(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "date"=>"date | nullable  ",
            "content"=>"string   ",
            "sub_menu_id"=>"integer  ",
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000  ",

        ]);
    }

    public static function menu(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "link"=>"string | nullable  ",
            "class"=>"string |nullable  ",

            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }
    public static function features(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "short_text"=>"string | nullable  ",
            "h1"=>"string | nullable  ",
            "font"=>"string | nullable  ",


            "main_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }

    public static function tabs(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "head"=>"string | nullable  ",
            "content"=>"string | nullable  ",
            "font"=>"string | nullable  ",
            "tab_id"=>"string | nullable",

            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }
    public static function testimonials(){
        return request()->validate([
            "name"=>"string | between:4,100  ",
            "stars"=>"integer | nullable  ",
            "content"=>"string | nullable  ",


            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }
    public static function feature2(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "font"=>"string | nullable  ",
            "content"=>"string | nullable  ",
            "text"=>"string | nullable  ",


            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }
    public static function video(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "btn_name"=>"string | nullable  ",
            "link"=>"string | nullable  ",
            "show"=>"integer | nullable  ",


            "bg_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }


    public static function plans(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "btn_name"=>"string | nullable  ",
            "currency"=>"string | nullable  ",
            "period"=>"string | nullable  ",
            "content"=>"string | nullable  ",
            "price"=>"integer | nullable  ",


        ]);
    }

    public static function landing(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "content"=>"string | nullable  ",
            "show"=>"integer | nullable  ",
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",


        ]);
    }

    public static function clients(){
        return request()->validate([
            "company_name"=>"string | between:4,100  ",
            "link"=>"string | nullable  ",

            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",


        ]);
    }

    public static function logo(){
        return request()->validate([
            "alt"=>"string | between:4,100  ",


            "main_logo"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",
            "header_logo"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",
            "footer_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",


        ]);
    }
    public static function team(){
        return request()->validate([
            "name"=>"string | between:4,100  ",
            "job"=>"string | between:4,100  ",

            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",


        ]);
    }

    public static function make(){
        return request()->validate([
        "title"=>"nullable | string",
            "content"=>"nullable | string",
            "font"=>"string |nullable",

        ]);
    }



    public static function circle(){
        return request()->validate([
            "title"=>"string",
            "progress"=>"integer",
            "class"=>"class"
        ]);
    }



}
