<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alunos index large-10 medium-6 columns content">
    <h3><?= __('Alunos') ?></h3>
    <table cellpadding="2" cellspacing="2">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Nome') ?></th>
                <th><?= $this->Paginator->sort('Cpf') ?></th>
                <th><?= $this->Paginator->sort('Rg') ?></th>
                <th><?= $this->Paginator->sort('Data de nascimento') ?></th>
                <th><?= $this->Paginator->sort('curso') ?></th>
                <th><?= $this->Paginator->sort('Matricula') ?></th>
                <th><?= $this->Paginator->sort('Semestre') ?></th>
                <th><?= $this->Paginator->sort('Unidade') ?></th>
                <th><?= $this->Paginator->sort('Url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $this->Number->format($aluno->id) ?></td>
                <td><?= h($aluno->nome) ?></td>
                <td><?= h($aluno->cpf) ?></td>
                <td><?= h($aluno->rg) ?></td>
                <td><?= h($aluno->datanasc) ?></td>
                <td><?= h($aluno->curso) ?></td>
                <td><?= h($aluno->matricula) ?></td>
                <td><?= $this->Number->format($aluno->semestre) ?></td>
                <td><?= h($aluno->unidade) ?></td>
                <td><?= h($aluno->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('proximo')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('anterior') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
