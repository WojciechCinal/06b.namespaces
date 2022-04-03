<?php
/* Smarty version 3.1.30, created on 2022-04-03 12:50:21
  from "C:\xampp\htdocs\06b.namespaces\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62497bedb51b44_14804784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee3b9cf0663c15476ef6b7a6aba227fa6881c4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06b.namespaces\\app\\views\\CalcView.tpl',
      1 => 1648982807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62497bedb51b44_14804784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73449414262497bedb35342_70420241', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87154224062497bedb37662_62723935', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74423623962497bedb51047_99571938', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_73449414262497bedb35342_70420241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer">
    <ul class="icons">
        <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
    </ul>
    <ul class="copyright">
        <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</section>
<?php
}
}
/* {/block 'footer'} */
/* {block 'header'} */
class Block_87154224062497bedb37662_62723935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="header">
    <div class="inner">
        <span class="icon solid major fa-cloud"></span>
        <h1>Witaj w prostym kalkulatorze kredytowym.<br />
            Wykorzystano szablon <strong>PHOTON</strong> ze strony: <a href="http://html5up.net">HTML5 UP</a>.</h1>
        <p>Zadanie 6a. Kontroler  - Nowa struktura</p>
        <ul class="actions special">
            <li><a href="#one" class="button scrolly">Przejdź do kalkulatora</a></li>
        </ul>
    </div>
</section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_74423623962497bedb51047_99571938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="one" class="main style1">
    <div class="container">
        <header class="major special">
            <h2>Kalkulator</h2>
        </header>
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <label for="kwota">Kwota kredytu: </label>
                        <input id="id_kw" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="id_op">Oprocentowanie: </label>
                        <input id="id_op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" /><br />
                    </div>
                    <div class="col-12">
                        <label for="id_cz">Czas spłaty: </label>
                        <select name="czas">
                            <option value="6m">6 miesięcy</option>
                            <option value="12m">12 miesięcy</option>
                            <option value="2r">2 lata</option>
                            <option value="3r">3 lata</option>
                            <option value="5r">5 lat</option>
                            <option value="10r">10 lat</option>
                            <option value="15r">15 lat</option>
                            <option value="20r">20 lat</option>
                            <option value="25r">25 lat</option>
                        </select>
                    </div>
                    <div>
                            <button type="submit" class="primary">Oblicz</button>
                    </div>
                </div>
            </form>
        </section>
<div class="messages">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->rata)) {?>
	<h4>Rata</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->rata;?>

	</p>
<?php }?>
    </div>
</div>
</section>

<?php
}
}
/* {/block 'content'} */
}
