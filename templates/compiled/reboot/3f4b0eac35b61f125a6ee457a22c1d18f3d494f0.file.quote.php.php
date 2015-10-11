<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/quote.php" */ ?>
<?php /*%%SmartyHeaderCode:807084945561a99c0c109c5-74751316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4b0eac35b61f125a6ee457a22c1d18f3d494f0' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/quote.php',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807084945561a99c0c109c5-74751316',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c0c17be1_19072030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0c17be1_19072030')) {function content_561a99c0c17be1_19072030($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo SmartyPhpTag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$quote = array(

1  => "А ты отписался в МБД?",
2  => "Луна флудить зовет!",
3  => "Тепло и лампы с флудом.",
4  => 'Диктатура МБД.',
5  => 'Как сказал товарищ Луна.',
6  => 'Дойдем до 5000!',
7  => 'Бункер — место, где пасутся драмы.'

);

srand ((double) microtime() * 1000000);
  $randnum = rand(1,7);

echo"$quote[$randnum]";
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo SmartyPhpTag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>