<h1> Alunos </h1>

<div class="Alunos Index">
	<table>
		<thead>
			<th> <?=$this->Paginator->sort('Foto') ?></th>
			<th> <?=$this->Paginator->sort('Nome') ?></th>
			<th> <?=$this->Paginator->sort('Cpf') ?></th>
			<th> <?=$this->Paginator->sort('Rg') ?></th>
			<th> <?=$this->Paginator->sort('Data de Nascimento') ?></th>
			<th> <?=$this->Paginator->sort('Matricula') ?></th>
			<th> <?=$this->Paginator->sort('Curso') ?></th>
			<th> <?=$this->Paginator->sort('Semestre') ?></th>
			<th> <?=$this->Paginator->sort('Unidade') ?></th>
			<th> <?=$this->Paginator->sort('Criado') ?></th>
			<th> <?=$this->Paginator->sort('Modificado') ?></th>
		</thead>
		<tbody>
			<?php foreach($alunos as $aluno): ?>
			<tr>
				<td><?= $aluno->url ?> </td>
				<td><?= $aluno->nome ?> </td>
				<td><?= $aluno->cpf ?> </td>
				<td><?= $aluno->rg ?> </td>
				<td><?= $aluno->datanasc ?> </td>
				<td><?= $aluno->curso ?> </td>
				<td><?= $aluno->matricula ?> </td>
				<td><?= $aluno->semestre ?> </td>
				<td><?= $aluno->unidade ?> </td>
				<td><?= $aluno->created ?> </td>
				<td><?= $aluno->modified ?> </td>

			</tr>

			<?php  endforeach;?>

		</tbody>

	</table>




</div>
