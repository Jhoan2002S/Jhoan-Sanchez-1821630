<h1>Lista de publicaciones</h1>

<a href="?controller=admin&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>tittle</th> 
        <th>descripcion</th>
        <th>url_image</th>
        <th>user</th>
        <th>Options</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publications):  ?>
        <tr>
            <td><?= $publications->id?></td>
            <td><?= $publications->title ?></td>
            <td><?= $publications->description ?></td>
            <td><image  width="100" height="50" src="<?= $publications->url_image ?>"></td>
            <td><?php if(isset($_SESSION['user'])): ?>
            <ul>
                <li><p style='color:black;'><?= $publications->name; ?>   </p></li>
            </ul>
            <?php endif; ?></td>
            <td width="200" class="table__options">
                <a href="?controller=admin&method=edit&id=<?= $publications->id ?>">
                <button class="btn btn-outline-green">Editar</button>
                </a>
                 <a href="?controller=admin&method=delete&id=<?= $publications->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
