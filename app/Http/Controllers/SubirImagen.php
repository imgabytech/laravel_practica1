<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class SubirImagen extends Controller
{
    public function createForm(){
      return view('productos.image-upload');
    
  }    


  public function fileUpload(Request $req){

    if($req->hasfile('imageFile')) 
        foreach($req->file('imageFile') as $file)
        
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);  
            $imgData[] = $name;  
        

        $fileModal = new Image();
        $fileModal->name = json_encode($imgData);
        $fileModal->image_path = json_encode($imgData);
        
       
        $fileModal->save();

       return back()->with('success', 'File has successfully uploaded!');
}


  }

    
