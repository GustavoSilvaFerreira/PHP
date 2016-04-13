<form method="POST" action="/teste/editar">
    <label>ID:</label><input type="number" name="id" value=<?= $data ?> readonly/></label>
    <label>Novo Nome:</label><input type="text" name="nome"/></label>
    <input type="submit" value="Alterar"/>
</form>
<?= $voltar ?>