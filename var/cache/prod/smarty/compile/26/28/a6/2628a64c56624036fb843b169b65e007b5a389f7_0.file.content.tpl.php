<?php
/* Smarty version 3.1.32, created on 2018-10-23 23:50:45
  from 'C:\xampp\htdocs\admin326jxi4hj\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf97b5596731_51250940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2628a64c56624036fb843b169b65e007b5a389f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin326jxi4hj\\themes\\default\\template\\content.tpl',
      1 => 1540328682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf97b5596731_51250940 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
