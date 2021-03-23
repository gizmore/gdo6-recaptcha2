<?php
/** @var $field \GDO\Captcha\GDT_Captcha **/
?>
<?php if (!$field->initial) : ?>
<div class="gdo-container<?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?=t('captcha')?></label>
  <div <?=$field->htmlID()?>
   class="gdo6-recaptcha2"></div>
  <input type="hidden" name="<?=$field->formName()?>" value="" />
  <?=$field->htmlError()?>
</div>
<?php endif; ?>