<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomePic;
use Auth;
use Image;

class HomePicController extends Controller
{
    public function HomePic() {
        $home_pics = HomePic::latest()->get();
        return view('admin.home_pic.index', compact('home_pics'));
    }

    public function EditHomePic($id)  {
        $home_pics = HomePic::find($id);
        return view('admin.home_pic.index', compact('home_pics'));

    }

    public function UpdateHomePic(Request $request, $id) {


        $old_image_1 = $request->old_image_1;
        $old_image_2 = $request->old_image_2;
        $old_image_3 = $request->old_image_3;
        $old_image_4 = $request->old_image_4;
        $old_image_5 = $request->old_image_5;

        $slider_image_1 = $request->file('imageone');
        $slider_image_2 = $request->file('imagetwo');
        $slider_image_3 = $request->file('imagethree');
        $slider_image_4 = $request->file('imagefour');
        $slider_image_5 = $request->file('imagefive');

        
        $name_gen1 = hexdec(uniqid());
        $img_ext1 = strtolower($slider_image_1->getClientOriginalExtension());
        $img_name1 = $name_gen1.'.'.$img_ext1;
        $up_location1 = 'storage/image/home_pic/1/';
        $last_img1 = $up_location1.$img_name1;
        $slider_image_1->move($up_location1,$img_name1);

        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
        $img_name2 = $name_gen2.'.'.$img_ext2;
        $up_location2 = 'storage/image/home_pic/2/';
        $last_img2 = $up_location2.$img_name2;
        $slider_image_2->move($up_location2,$img_name2);

        $name_gen3 = hexdec(uniqid());
        $img_ext3 = strtolower($slider_image_3->getClientOriginalExtension());
        $img_name3 = $name_gen3.'.'.$img_ext3;
        $up_location3 = 'storage/image/home_pic/3/';
        $last_img3 = $up_location3.$img_name3;
        $slider_image_3->move($up_location3,$img_name3);

        $name_gen4 = hexdec(uniqid());
        $img_ext4 = strtolower($slider_image_4->getClientOriginalExtension());
        $img_name4 = $name_gen4.'.'.$img_ext4;
        $up_location4 = 'storage/image/home_pic/4/';
        $last_img4 = $up_location4.$img_name4;
        $slider_image_4->move($up_location4,$img_name4);

        $name_gen5 = hexdec(uniqid());
        $img_ext5 = strtolower($slider_image_5->getClientOriginalExtension());
        $img_name5 = $name_gen5.'.'.$img_ext5;
        $up_location5 = 'storage/image/home_pic/5/';
        $last_img5 = $up_location5.$img_name5;
        $slider_image_5->move($up_location5,$img_name5);


        unlink($old_image_1);
        unlink($old_image_2);
        unlink($old_image_3);
        unlink($old_image_4);
        unlink($old_image_5);
        HomePic::find($id)->update([
            'imageone' =>$last_img1,
            'imagetwo' =>$last_img2,
            'imagethree' =>$last_img3,
            'imagefour' =>$last_img4,
            'imagefive' =>$last_img5,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.pic')->with('success', 'Home Pictures Update Successfully');


    }
}
