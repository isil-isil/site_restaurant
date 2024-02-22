
<?php
require('vue_nav2.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style/styleAccueil3.css">
</head>

<body class="w-100">
    <div>
        <?php echo $menu ;?>

                <!-- Contenu de la page ici -->
                <?php echo $contenu ; ?>
            
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
     <!-- Summernote JS - CDN Link -->
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            // $("#summernote").summernote();

            $("#summernote").summernote({
                placeholder: 'Hello',
                tabsize: 2,
                height: 300
            });
            
            // DEBUT TEST AJOUT IMAGE
            $(".summernote").summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        var $this = $(this);
                        sendFile(files[0],function(url) {
                            $this.summernote("insertImage", url);
                        });
                    }
                },
                height: function () {
                    return ($obj.attr("rows") * 30) || 300;
                },
                toolbar: [
                    // [groupName, [list of button]]
                    ['formatH',['style']],
                    ['style', ['bold', 'italic', 'underline','link', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['color', ['color']],
                    ['misc', ['codeview']],
                    ['insert', ['picture']]
                ]
            });
            // FIN TEST AJOUT IMAGE

            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>