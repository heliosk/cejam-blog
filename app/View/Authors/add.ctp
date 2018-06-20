<h1>Adicionar Autor</h1>

<p>
    <?php echo $this->Html->link('- Cancelar', array('controller'=>'authors', 'action'=>'index')) ;?>
</p>

<?php
    echo $this->Form->create('Author');
    echo $this->Form->input('name', array('class'=>'form-control', 'label'=>'Nome'));
?>
<div class="align-btn-submit">
<?php

    $options = array(
        'label' => 'Salvar',
        'class' => 'btn btn-primary btn-submit',
    );
    echo $this->Form->end($options);
?>
</div>
