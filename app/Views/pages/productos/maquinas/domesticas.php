<?= $this->extend('./layout/principal.php') ?>
<?= $this->section('contenido')?>

<div class="wrapper row2">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading font-x3">Maquinas Domesticas</h6>

        </div>
        <ul class="nospace group team">
            <li class="one_quarter first">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">D. Doe</strong> <em>Job Type Here</em></figcaption>
                </figure>
            </li>
        </ul>
        <br>
        <ul class="nospace group team">
            <li class="one_quarter first">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
                    <figcaption><strong class="heading">Modelo</strong> <em>descripcion</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a href="#"><img src="<?=base_url('/images/test/imagen_01.png') ?>" alt=""></a>
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