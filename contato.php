<div class="row canabi">
<form id="form1" name="form1" method="post" action="enviarcontato.php">
<p>
	<label for="nome">Nome</label>
	<input type="text" name="nome" id="nome" />

</p>
<p>
    <label for="email">E-mail</label>
	<input type="text" name="email" id="email" />
</p>

<p>
	<label for="assunto">Assunto</label>
	<select name="assunto" id="assunto">
		<option>Sugestão</option>
		<option>Reclamação</option>
		<option>Elogios</option>
		</select>
</p>
<p>
	<label for="comentario">Comentário</label>
	<textarea name="comentario" id="comentario" cols="45" rows="5"></textarea>

</p>

<p>
	<input type="submit" name="enviar" id="enviar" value="Enviar" />

</p>
</form>
</div>