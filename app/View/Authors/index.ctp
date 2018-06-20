<h1>Lista de autores</h1>
<p>
    <?php echo $this->Html->link('+ Adicionar Autor', array('controller'=>'authors', 'action'=>'add')); ?>
</p>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Autor</th>
            <th>Opções</th>
            <th>Criado em:</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($authors as $author): ?>
            <tr>
                <td scope="row"><?php echo $author['Author']['id'] ?></td>
                <td><?php echo $this->Html->link($author['Author']['name'], array('controller'=>'authors', 'action'=>'view', $author['Author']['id'])) ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller'=>'authors', 'action'=>'edit', $author['Author']['id'])); ?> |
                <?php echo $this->Form->postLink('Remover', array('controller'=>'authors', 'action'=>'delete', $author['Author']['id']), array(), __("Deseja remover o registro?")) ?></td>
                <td><?php echo $this->App->formatar_datetime($author['Author']['created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
