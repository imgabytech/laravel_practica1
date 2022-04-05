<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Gestión de Imagenes</title>
    <style>
        .container 
            max-width: 500px;
        
        dl, ol, ul 
            margin: 0;
            padding: 0;
            list-style: none;
        
        .imgPreview img 
            padding: 8px;
            max-width: 100px;
         
    </style>
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center mb-5">Gestión de Imagenes</h3>
        <form action="route('imageUpload')" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <strong> $message </strong>
                </div>
            <?php endif; ?>

            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> $error </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Elegir Imagen</label>
            </div>

            <div class="">
                <input type="text" name="nombre_imagen" placeholder="Nombre debe ser igual al código del producto">
                <label class="custom-file-label" for="images">Nombre de Imagen</label>
              </div>        

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Subir Imagen
            </button>
        </form>
    </div>
  
    <!-- jQuery -->
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        
        var multiImgPreview = function(input, imgPreviewPlaceholder) 

            if (input.files) 
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                    var reader = new FileReader();

                    reader.onload = function(event) 
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    

                    reader.readAsDataURL(input.files[i]);
                
            

        ;

        $('#images').on('change', function() 
            multiImgPreview(this, 'div.imgPreview');
        
        });    
    </script>-->
</body>
</html><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/image-upload.blade.php ENDPATH**/ ?>