<h1>Adicionar Post</h1>

<p>
    <?php echo $this->Html->link('- Cancelar', array('controller'=>'posts', 'action'=>'index')) ;?>
</p>

<?php echo $this->Form->create('Post'); ?>
<div class="row">
    <div class="col-md-12">
        <?php echo $this->Form->input('title', array('class'=>'form-control', 'label'=>'Título')); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php echo $this->Form->input('body', array('rows'=>'3', 'class'=>'form-control', 'label'=>'Post')); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?php echo $this->Form->input('author_id', array('options'=> $author, 'class'=>'form-control', 'empty'=>'Escolha um autor', 'label'=>'Autor')); ?>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-md-6">
        <?php echo $this->Form->input('Post.Tag', array('multiple' => 'checkbox', 'label'=>'Tags'));  ?>
    </div>
</div>

<div class="align-btn-submit">
<?php

    $options = array(
        'label' => 'Salvar',
        'class' => 'btn btn-primary btn-submit',
    );
    echo $this->Form->end($options);
?>
</div>
