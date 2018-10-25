<?php
/* Smarty version 3.1.32, created on 2018-10-23 23:50:06
  from 'C:\xampp\htdocs\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf978e69c909_32566275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b60ab317bf03097490df247057a121f5ed1152c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\classic\\templates\\index.tpl',
      1 => 1540328716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf978e69c909_32566275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3178941065bcf978e6996f3_08543928', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11666118595bcf978e699f02_59425971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19466074365bcf978e69b062_09152923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10201558125bcf978e69a9b4_80578680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19466074365bcf978e69b062_09152923', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3178941065bcf978e6996f3_08543928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3178941065bcf978e6996f3_08543928',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11666118595bcf978e699f02_59425971',
  ),
  'page_content' => 
  array (
    0 => 'Block_10201558125bcf978e69a9b4_80578680',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19466074365bcf978e69b062_09152923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11666118595bcf978e699f02_59425971', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10201558125bcf978e69a9b4_80578680', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
