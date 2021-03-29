<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= constant('URL');?>node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <title><?= $this->pageTitle; ?></title>
</head>
<body class="bg-light">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <h1 class="display-1 text-center font-weight-light mt-5 text-warning"><i class="fas fa-radiation"></i></h1>
                <h1 class="display-5 text-center font-weight-light mt-5">Error Manager</h1>
                <p class="text-center font-weight-light lead mt-5"><?= $this->errorView; ?></p>
            </div>            
        </div>
    </div>
    <div id="footer" class="fixed-bottom bg-dark p-2">        
        <p class="text-center text-light"><small class="text-light">This repository is created by <a href="https://github.com/mgasca93" class="text-light">Mario Gasca</a> <?= date('Y');?> Lincense MIT</small></p>   
    </div>
    <script defer src="<?= constant('URL');?>node_modules\@fortawesome\fontawesome-free\js\all.js"></script>
</body>
</html>