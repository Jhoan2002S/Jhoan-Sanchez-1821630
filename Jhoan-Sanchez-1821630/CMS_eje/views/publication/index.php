<h1>Lista de publicaciones</h1>

<a href="?controller=publication&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>tittle</th>
        <th>descripcion</th>
        <th>url_image</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publications):  ?>
        <tr>
            <td><?= $publications->id_p ?></td>
            <td><?= $publications->title ?></td>
            <td><?= $publications->description ?></td>
            <td><?= $publications->url_image ?></td>
            <td width="200" class="table__options">
                <a href="?controller=publication&method=edit&id=<?= $publication->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                 <a href="?controller=publication&method=delete&id=<?= $publication->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
