<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Upload Files - PHP</title>
    </head>
    <body>
        
        <div class='container'>
            
            <div class='row mt-5'>
                <div class="col-lg-12">
                    <h1>UpLoads de arquivos com PHP</h1>
                    <p style='margin-top: -10px'>Subindo arquivo para (enfase imagem) e renomenando</p>
                </div>
            </div>
            
            <div class='row'>
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            
            <div class='row'>
                <div class="col-lg-6">
                    
                    <form action="processarUpload.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Enviar imagem</label>
                            <input class="form-control" type="file" id="formFile" name="imagemAenviar">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                        
                    </form>
                                                
                    
                </div>
            </div>
            
            
            
            
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    </body>
</html>

