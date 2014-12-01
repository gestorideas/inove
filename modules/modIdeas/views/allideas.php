  <!-- DASHBOARD -->
            <div class="page-header">
                <h1>
                    ¿What's going on?<small>People are thinking in...</small>
                </h1>
                <a href="#" class="btn btn-warning btn-sm">
                    <span class="glyphicon glyphicon-filter"></span>&nbsp;Filter
                </a>
            </div>
  <!-- TABLE -->
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Idea</th>
                        <th>Tags</th>
                        <th>Votes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        // Obtiene e imprime la lista de ideas del sitio
                        include "../controller/controllerListAllIdeas.php";
                        define ( "AUTHORID", "ce6fe2caa3a4a48157ddd4a0b1e6e329" ); // Cambiar por el id de sesion del usuario
                        $listAllIdeas = getListAllIdeas ( AUTHORID );
                        echo $listAllIdeas;
                ?>
                </tbody>
            </table>
