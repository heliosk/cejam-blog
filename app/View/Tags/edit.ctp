<h1>Editar Tag</h1>
<p>
    <?php echo $this->Html->link('<- Voltar', array('controller'=>'tags','action'=>'index')); ?>
</p>

<?php
    echo $this->Form->create('Tag');
    echo $this->Form->input('name', ['class'=>'form-control', 'label'=>'Nome']);
    echo $this->Form->input('id', array('type'=>'hidden'));
?>

<div class="align-btn-submit">
<?php
    $options = array(
        'label' => 'Atualizar',
        'class' => 'btn btn-primary btn-submit'
    );
    echo $this->Form->end($options);
?>
</div>
