<h1>Lista de publicaciones</h1>

<a href="?controller=student&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<br><br>
<table class="table">
    <thead >
        <th>id</th>
        <th>tittle</th> 
        <th>descripcion</th>
        <th>url_image</th>
        <th>user</th>
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
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>