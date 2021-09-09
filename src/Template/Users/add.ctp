<?php


echo $this->Form->create($user);
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->submit('Save');
echo $this->Form->end();
?>
<br>
<br>
<a href="/users">Voltar</a>