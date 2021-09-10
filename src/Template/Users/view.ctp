<h3>User</h3>
<ul>
    
    <li>id: <?php echo $user->id; ?></li>
    <li>Nome: <?php echo $user->first_name; ?></li>
    <li>Sobrenome: <?php echo $user->last_name; ?></li>
    <li>email: <?php echo $user->email; ?></li>
    <li>Criado em: <?php echo $user->created; ?></li>
    <li>Atualizado em: <?php echo $user->modified; ?></li>
   
</ul>

<a href="/users">Voltar</a>