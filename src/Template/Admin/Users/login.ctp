
<div class="colim content">
    <h3>Login</h3>

<?php
echo $this->Form->create();
?>
<fieldset>
    <?php
echo $this->Form->input('email',[
    'placeholder'=>'Seu email aqui...'
]);

echo $this->Form->input('password', [
    'label'=>'Senha',
    'placeholder'=> '******'
]);
echo $this->Form->button('Send');
?>
</fildset>
<?php
echo $this->Form->end();
?>
</div>