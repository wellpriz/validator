<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alunos view large-10  medium-9 columns content">
    <h3><?= h($aluno->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($aluno->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($aluno->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Rg') ?></th>
            <td><?= h($aluno->rg) ?></td>
        </tr>
        <tr>
            <th><?= __('Curso') ?></th>
            <td><?= h($aluno->curso) ?></td>
        </tr>
        <tr>
            <th><?= __('Matricula') ?></th>
            <td><?= h($aluno->matricula) ?></td>
        </tr>
        <tr>
            <th><?= __('Unidade') ?></th>
            <td><?= h($aluno->unidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($aluno->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aluno->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Semestre') ?></th>
            <td><?= $this->Number->format($aluno->semestre) ?></td>
        </tr>
        <tr>
            <th><?= __('Datanasc') ?></th>
            <td><?= h($aluno->datanasc) ?></td>
        </tr>
    </table>
</div>
