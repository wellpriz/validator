<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aluno->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alunos form large-12 medium-9 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Edit Aluno') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cpf');
            echo $this->Form->input('rg');
            echo $this->Form->input('datanasc');
            echo $this->Form->input('curso');
            echo $this->Form->input('matricula');
            echo $this->Form->input('semestre');
            echo $this->Form->input('unidade');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
