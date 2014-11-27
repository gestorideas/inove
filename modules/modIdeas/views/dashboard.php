  <!-- DASHBOARD -->
            <div class="page-header">
                <h1>
                    My Brainstorming <small>Here begins a great idea...</small>
                </h1>
                <a href="./mainpanel.php?action=2" class="btn btn-warning btn-sm">
                    <span class="glyphicon glyphicon-star"></span>New idea
                </a>
            </div>
  <!-- TABLE -->
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Idea</th>
                        <th>Tags</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        // Obtiene e imprime la lista de ideas de un autor
                        include "../controller/controllerListIdeas.php";
                        define ( "AUTHORID", "ce6fe2caa3a4a48157ddd4a0b1e6e329" ); // Cambiar por el id de sesion del usuario
                        $listIdeas = getListIdeas ( AUTHORID );
                        echo $listIdeas;
                ?>
                </tbody>
            </table>
