<section class="container">
    <h1>Crear publicacion</h1>
    <form action="?controller=admin&method=store" method="POST">
        <section class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control">
        </section>
        <section class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" name="description" id="description" required class="form-control">
        </section>
        <section class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" id="file" class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>