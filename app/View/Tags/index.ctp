<h1>Lista de tags</h1>
<p>
    <?php echo $this->Html->link('+ Adicionar Tag', array('controller'=>'tags', 'action'=>'add')); ?>
</p>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Tag</th>
            <th>Opções</th>
            <th>Criada em:</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tags as $tag): ?>
            <tr>
                <td scope="row"><?php echo $tag['Tag']['id'] ?></td>
                <td><?php echo $tag['Tag']['name'] ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller'=>'tags', 'action'=>'edit', $tag['Tag']['id'])); ?> |
                <?php echo $this->Form->postLink('Remover', array('controller'=>'tags', 'action'=>'delete', $tag['Tag']['id']), array(), __("Deseja remover o registro?")) ?></td>
                <td><?php echo $this->App->formatar_datetime($tag['Tag']['created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
