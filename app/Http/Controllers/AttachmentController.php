<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AttachmentController extends Controller
{

    private $mainDir = 'task/inspection/';

    public function getList(Request $request,$id){
        if((!$request->dir) || (!$id)){
            return response()->json([
                'status' => false
            ]);
        }


        $dir = $this->mainDir.$id.'/'.$request->dir.'/';

        if(!Storage::disk('public')->exists($dir)){
            Storage::disk('public')->makeDirectory($dir);
        }

        $disk = Storage::disk('public');
        $files  = [];
        foreach ($disk->allFiles($dir) as $file){
            $files[] = [
                'link' => asset('storage/'.$file),
                'name' => basename($file),
                'date' => date(DATE_RFC2822, $disk->lastModified($file)),
                'size' => $disk->size($file),
                'ext'  => strtolower(File::extension($file))
            ];
        }
        return response()->json([
            'status' => true,
            'files'  => $files
        ]);
    }

    public static function getListInFiles($d,$i){
        $dirs = new self();
        return $dirs->getListInStatic($d,$i);
    }

    public function getListInStatic($dirs,$id){
        if((!$dirs) || (!$id)){
            return [
                'status' => false
            ];
        }


        $dir = ''.$this->mainDir.$id.'/'.$dirs.'/';

        if(!Storage::disk('public')->exists($dir)){
            Storage::disk('public')->makeDirectory($dir);
        }

        $disk = Storage::disk('public');
        $files  = [];
        $extarray = ['jpeg','jpg','png','gif'];

        foreach ($disk->allFiles($dir) as $file){
            $itext = strtolower(File::extension($file));
            if(in_array($itext,$extarray)) {
                $files[] = [
                    'link' => 'storage/' . $file,
                    'name' => basename($file),
                    'date' => date(DATE_RFC2822, $disk->lastModified($file)),
                    'size' => $disk->size($file),
                    'ext' => $itext
                ];
            }
        }
        return [
            'status' => true,
            'files'  => $files
        ];
    }

    public function upload(Request $request,$id){

        $file = $request->file('file');

        if((!$request->dir) || !($file) || (!$id)){
            return response()->json([
                'status'   => false
            ]);
        }

        $dir = $this->mainDir.$id.'/'.$request->dir;

        if(!Storage::disk('public')->exists($dir)){
            Storage::disk('public')->makeDirectory($dir);
        }

        /*if(substr($file->getMimeType(), 0, 5) == 'image'){
            $pdfthumb = 'pdfthumb/'.$dir;
            if(!Storage::disk('public')->exists($pdfthumb)){
                Storage::disk('public')->makeDirectory($pdfthumb);
            }
            $pdfthumbImage = Image::make($file)->resize(150,150)->save('tmp/tmp'.$file->getClientOriginalExtension());
            Storage::disk('public')->put($pdfthumb.'/'.$file->getClientOriginalName(),$pdfthumbImage);
        }*/

        $status = $file->storeAs($dir,$file->getClientOriginalName(),'public');

        return response()->json([
            'status'   => $status
        ]);
    }


    public function attachmentCount($id){
        $dir = $this->mainDir.$id;
        $disk = Storage::disk('public');

        $files = [];

        foreach ($disk->allDirectories($dir) as $f){
            $files[basename($f)] = count($disk->files($f));
        }

        return $files;
    }

    public static function attachmentC($id){
        $it = new self();
        return $it->attachmentCount($id);
    }

    public function delete(Request $request,$id){
        if(!$request->file){
            return response()->json([
                'status' => true
            ]);
        }

        $file = str_replace('/storage/','',$request->file);

        if(Storage::disk('public')->exists($file)){
            Storage::disk('public')->delete($file);
        }

        if(Storage::disk('public')->exists('pdfthumb/'.$file)){
            Storage::disk('public')->delete('pdfthumb/'.$file);
        }

        return response()->json([
            'status' => $file
        ]);
    }


}
