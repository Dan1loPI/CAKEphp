<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($users as $user): ?>

        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td>
                <a href="/users/view/<?php echo $user->id;?>">Visualizar</a>
                <a href="/users/edit/<?php echo $user->id;?>">Editar</a>
             <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Realmente você quer apagar o usuário {0} ?', $user->name)]) ?> 
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>      
<br>
<br>
<a href="/Users/add">Novo</a>