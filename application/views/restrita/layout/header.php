<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Antonio Daleo | Programador">

  <?php echo (isset($titulo) ? '<title>Area restrita | '.$titulo.'</title>': '<title>Gerenciamento Site</title>' ) ?>


  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/restrita/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/restrita/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/restrita/style.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/restrita/css/app.css' )?>">

  <?php if(isset($styles)): ?>
    
    <?php foreach($styles as $style):?>
        
      <link rel="stylesheet" href="<?php echo base_url('assets/restrita/'.$style); ?>" rel="stylesheet" >
        
    <?php endforeach; ?>
  <?php endif; ?>
  
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">