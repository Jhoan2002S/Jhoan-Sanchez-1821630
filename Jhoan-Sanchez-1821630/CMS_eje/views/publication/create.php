<section class="container">
    <h1>Crear usuario</h1>
    <form action="?controller=user&method=store" method="POST">
        <section class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control">
        </section>
        <section class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" name="description" id="Description" required class="form-control">
        </section>
        <section class="form-group">
            <label for="url_img">url_img</label>
            <input type="file" name="url_img" id="url_img" required class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>