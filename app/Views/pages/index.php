<?= $this->extend('./layout/principal.php')?>


<?= $this->section('contenido')?>

<div class="wrapper row3">
      <main class="hoc container clear">
        <div class="posts">
          <figure class="group">
            <div><a href="#"><img src="images/test/imagen_03.png" alt=""></a></div>
            <figcaption>
              <ul class="list-unstyled mb-0">
                <li><i class="fas fa-phone mt-4 fa-2x"> Textiles</i>
                  <br>
                  <br>
                  <p>Importados, de alta calidad, duración y resistencia.</p>
                </li>
                <hr>
                <br>
                <br>


                <li><i class="fas fa-phone mt-4 fa-2x"> Maquinaria</i>
                  <br>
                  <br>
                  <p>Maquinaria industrial para coser prendas.</p>
                </li>
                <br>
                <hr>
                <br>
                <li><i class="fas fa-envelope mt-4 fa-2x"> Repuestos</i>
                  <p>&nbsp; Contamos con varios diseños y colores como: Textiles
                    Hilos
                    Máquinas
                    Respuestos</p>
                </li>
              </ul>
            </figcaption>
          </figure>
        </div>

        <div class="clear"></div>
      </main>
    </div>
<?= $this->endSection()?>