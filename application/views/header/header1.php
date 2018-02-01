<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html><html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($title)) {
						echo $title;
						}else {
						echo "Full View";
					} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>" media="screen">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/sunny/jquery-ui.min.css">
    <script src="https://use.fontawesome.com/04d9aa23c9.js"></script>
		<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  </head>
