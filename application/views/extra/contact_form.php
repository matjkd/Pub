<div id="contact_form">
	<?=form_open('email/send');?>
	<br/>
        <?=form_label('Email')?>
	<p class="form_email">
	<?=form_input('email')?>
	</p>
        <?=form_label('Subject')?>
	<p class="form_subject">
	<?=form_input('subject')?>
	</p>
	
	<p class="form_message">
	<?=form_textarea('message')?>
	</p>
	
Enter the word you see below<br/>



<input type="text" name="captcha" value="" /><br/><br/><?=form_label($captcha['image'])?>
</div>
	<?=form_hidden('ip_address', $this->input->ip_address())?>
	<?=form_hidden('time', $captcha['time'])?>
<div id="contact_submit"><?=form_submit('submit', 'Submit')?></div><br/>
	<?=form_close()?>