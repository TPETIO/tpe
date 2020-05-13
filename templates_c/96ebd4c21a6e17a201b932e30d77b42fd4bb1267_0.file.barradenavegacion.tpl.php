<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-13 20:18:49
  from 'C:\xampp\htdocs\tpe-tio\templates\barradenavegacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebc3a09598c20_57233335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ebd4c21a6e17a201b932e30d77b42fd4bb1267' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-tio\\templates\\barradenavegacion.tpl',
      1 => 1589393926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ebc3a09598c20_57233335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedornav">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark barranavegacion">
    <a class="navbar-brand" href=" ">CodeGit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
</div><?php }
}
