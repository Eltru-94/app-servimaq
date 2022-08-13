

<?= $this->extend('./layout/principal.php')?>


<?= $this->section('contenido')?>

<div class="wrapper row2">
        <section class="hoc container clear"> 
          <!-- ################################################################################################ -->
          <div class="sectiontitle">
            <h6 class="heading font-x3">Repuestos</h6>
           
          </div>
          <ul class="nospace group team">
            <li class="one_quarter first">
              <figure><a  href="#"><img src="images/demo/gallery/07.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
            <li class="one_quarter">
              <figure><a  href="#"><img src="images/demo/gallery/06.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
            <li class="one_quarter">
              <figure><a  href="#"><img src="images/demo/gallery/04.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
            <li class="one_quarter">
            <figure><a  href="#"><img src="images/demo/gallery/03.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
          </ul>
    <br>
          <ul class="nospace group team">
            <li class="one_quarter first">
              <figure><a  href="#"><img src="images/demo/gallery/03.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
            <li class="one_quarter">
              <figure><a  href="#"><img src="images/demo/gallery/04.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
            <li class="one_quarter">
              <figure><a  href="#"><img src="images/demo/gallery/06.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
            <li class="one_quarter">
              <figure><a  href="#"><img src="images/demo/gallery/06.png" alt=""></a>
                <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
              </figure>
            </li>
          </ul>
         
          <!-- ################################################################################################ -->
        </section>
      </div>

      <script>
    function activar(){
        
       let nosotros= document.getElementById("productos");
        nosotros.classList.add("active");
      
    }


    window.onload=activar();
</script>

<?= $this->endSection()?>