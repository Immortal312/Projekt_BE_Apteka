<?php
/* Smarty version 3.1.32, created on 2018-10-23 23:50:06
  from 'C:\xampp\htdocs\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf978e8c7823_80216121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc99608d8fe7e6b070005502533d34d3e6c4a1d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\classic\\templates\\page.tpl',
      1 => 1540328717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf978e8c7823_80216121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16136604895bcf978e8412d2_56780649', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_706274025bcf978e842338_16774900 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_3571833595bcf978e841a87_56025953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_706274025bcf978e842338_16774900', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12539736355bcf978e8c4655_38350804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1847421205bcf978e8c5181_46069456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20099307765bcf978e8c3e64_48472040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12539736355bcf978e8c4655_38350804', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1847421205bcf978e8c5181_46069456', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_19509629065bcf978e8c6808_14140381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19406143895bcf978e8c60c0_19210277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19509629065bcf978e8c6808_14140381', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16136604895bcf978e8412d2_56780649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16136604895bcf978e8412d2_56780649',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3571833595bcf978e841a87_56025953',
  ),
  'page_title' => 
  array (
    0 => 'Block_706274025bcf978e842338_16774900',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20099307765bcf978e8c3e64_48472040',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12539736355bcf978e8c4655_38350804',
  ),
  'page_content' => 
  array (
    0 => 'Block_1847421205bcf978e8c5181_46069456',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19406143895bcf978e8c60c0_19210277',
  ),
  'page_footer' => 
  array (
    0 => 'Block_19509629065bcf978e8c6808_14140381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3571833595bcf978e841a87_56025953', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20099307765bcf978e8c3e64_48472040', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19406143895bcf978e8c60c0_19210277', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
