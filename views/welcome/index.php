<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <title><?= $this->pageTitle; ?></title>
</head>
<body class="bg-light">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <h1 class="display-1 text-center font-weight-light mt-5">Welcome</h1>
                <p class="text-center font-weight-light">You are using the miniFrameWork</p>                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 text-center">
                <a href="https://github.com/mgasca93/microFrameWork" class="btn btn-xs btn-outline-dark"><i class="fab fa-github-alt"></i> Repository</a>                
            </div>
        </div>
    </div>
    <div id="footer" class="fixed-bottom bg-dark p-2">        
        <p class="text-center text-light"><small class="text-light">This repository is created by <a href="https://github.com/mgasca93" class="text-light">Mario Gasca</a> <?= date('Y');?> Lincense MIT</small></p>   
    </div>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\all.js"></script>
</body>
</html>