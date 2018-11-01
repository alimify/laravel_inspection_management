<?php

namespace App\Http\Controllers\User;

use App\Laraption;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    private $user;

    private function getuser($id = false)
    {
        $user = Auth::user();
        if(($id && $user->id == $id) || (!$id)){
            $id = $user->id;
        }elseif (($user->role_id == 1) && ($id)){
            $id = $id;
        }else{
            abort(404);
        }

        $this->user = User::find($id);

        $confs = Laraption::where('key','REGEXP','user.id.'.$user->id)->get();
        foreach ($confs as $conf){
            Config::set('load.'.str_replace('.id.'.$user->id,'',$conf->key),$conf->value);
        }
    }

    public function index($id = false){
        $this->getuser($id);
        $user = $this->user;

        return response()->view('user.profile.view',compact('user'));
    }

    public function edit($id = false){
        $this->getuser($id);
        $user = $this->user;
        return response()->view('user.profile.settings',compact('user'));
    }

    public function update(Request $request,$id = false){

    }

    public function settings($id = false){
        $this->getuser($id);
        $user = $this->user;
        return response()->view('user.profile.settings',compact('user'));
    }

    public function settingsUpdate(Request $request,$id){

            $this->validate($request,[
                'name' => 'required|max:50',
                'email' => 'required|email|unique:users,email,'.$id,
                'image' => 'mimes:jpg,jpeg,png,bmp,gif'
            ]);

            if($request->password){
                $this->validate($request,[
                    'password' => 'string|min:6|confirmed'
                    ]);
            }

        $this->getuser($id);
        $user = $this->user;
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
        $user->password = Hash::make($request->password);
        }
        $user->save();

        $phone = Laraption::firstOrNew([
            'key' => 'user.id.'.$id.'.phone'
        ]);
        $phone->value = $request->phone;
        $phone->save();


        $address = Laraption::firstOrNew([
            'key' => 'user.id.'.$id.'.address'
        ]);
        $address->value = $request->address;
        $address->save();



        $image = Laraption::firstOrNew([
            'key' => 'user.id.'.$id.'.image'
        ]);
        $imagefile = $request->file('image');
        $dir = 'profile';
        $imagename = $image->value;

        if(is_file($imagefile)){

            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }

            if(Storage::disk('public')->exists(str_replace('storage/','',$image->value))){
                Storage::disk('public')->delete(str_replace('storage/','',$image->value));
            }
            $imagename = uniqid().'.'.$imagefile->getClientOriginalExtension();
            $userImage = Image::make($imagefile)->resize(300,300)->save('storage/'.$dir.'/tmp.'.$imagefile->getClientOriginalExtension());
            Storage::disk('public')->put($dir.'/'.$imagename,$userImage);

            $imagename = 'storage/'.$dir.'/'.$imagename;

        }
        $image->value = $imagename;
        $image->save();


        return redirect()->back()->with('status','Settings Successfully Updated.');
    }
}
