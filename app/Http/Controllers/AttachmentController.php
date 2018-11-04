<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        $status = $file->storeAs($dir,$file->getClientOriginalName(),'public');

        return response()->json([
            'status'   => $status
        ]);
    }

    public function delete(Request $request,$id){

    }


}
