<h1>Lista de usuarios</h1>

<a href="?controller=user&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                 <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

