<?php
/* Smarty version 3.1.30, created on 2022-04-03 12:25:55
  from "C:\xampp\htdocs\06b.namespaces\app\views\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6249763368a4c0_62625670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4697d367bf4220c6ce56ca022c6fda5d9e65d511' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06b.namespaces\\app\\views\\templates\\main.html',
      1 => 1648977535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249763368a4c0_62625670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Photon by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
<body>

<div class="header">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17869675556249763367c144_04424854', 'header');
?>

</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_988394600624976336814a6_06733210', 'content');
?>

</div>

<div class="footer">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212772029562497633686f91_92518227', 'footer');
?>
	
</div>
    
    			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_17869675556249763367c144_04424854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 naglowek .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_988394600624976336814a6_06733210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 kontent .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_212772029562497633686f91_92518227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 stopka ....<?php
}
}
/* {/block 'footer'} */
}
