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
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>


	<!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="html/css/vanillaCalendar.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Kannada:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/viewer.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_URL?>css/general.css?v=1.1">

    
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=BASE_URL?>">
      <img class="img-fluid" width="30" src="<?=BASE_URL?>public/images/logo.png" alt="Shri Shankara Vedapathashala Trust (Reg)" />
      ವೇದದೀಪಿಕಾ / Vedadeepika
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?=BASE_URL?>">ಮುಖಪುಟ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASE_URL?>#books">ಪುಸ್ತಕಗಳು</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASE_URL?>Contact">ಸಂಪರ್ಕಿಸಿ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>