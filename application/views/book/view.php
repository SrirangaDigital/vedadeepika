<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>ವೇದದೀಪಿಕಾ(ವೇದ ಕಲಿಕೆಯ ದೀವಿಗೆ)</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">

    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>flipbook/css/flipbook.style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="<?=PUBLIC_URL?>flipbook/js/flipbook.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $("#container").flipBook({
                pdfUrl: "<?=DATA_URL . $data['id']?>/index.pdf",
                deeplinking:{
                enabled:true,
                prefix:""
                }
            });

        })
    </script>

</head>
<body>
	<div id="container">
</div>
</body>

</html>
