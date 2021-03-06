<?php
use GDO\Core\GDT_Template;

/** @var $field \GDO\Captcha\GDT_Captcha **/
?>
<?php if (!$field->initial) : ?>
<div class="gdt-container<?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?=t('captcha')?></label>
  <?= GDT_Template::php('Captcha', 'form/captcha_inner.php', ['field' => $field])?>
  <?=$field->htmlError()?>
</div>
<?php endif; ?>