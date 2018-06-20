<h1>Lista de postagens</h1>
<p>
    <?php echo $this->Html->link('+ Adicionar Post', array('controller'=>'posts', 'action'=>'add')); ?>
</p>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Opções</th>
            <th>Criado em:</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td scope="row"><?php echo $post['Post']['id'] ?></td>
                <td><?php echo $this->Html->link($post['Post']['title'], array('controller'=>'posts', 'action'=>'view', $post['Post']['id'])) ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller'=>'posts', 'action'=>'edit', $post['Post']['id'])); ?> |
                <?php echo $this->Form->postLink('Remover', array('controller'=>'posts', 'action'=>'delete', $post['Post']['id']), array(), __("Deseja remover o registro?")) ?></td>
                <td><?php echo $this->App->formatar_datetime($post['Post']['created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
