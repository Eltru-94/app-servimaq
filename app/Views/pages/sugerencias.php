<?= $this->extend('./layout/principal.php') ?>


<?= $this->section('contenido') ?>

<div class="wrapper row3">
    <main class="">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <div class="posts">
            <figure class="group">
                <section id="callback" class="hoc clear">
                    <!-- ################################################################################################ -->
                    <div>
                        <h6 class="heading">Sugerencias</h6>

                        <form method="post" action="#">
                            <fieldset>
                                <input type="text" value="" placeholder="Nombre">
                                <input type="text" value="" placeholder="Email">
                                <input type="text" placeholder="Asunto"></input>

                            
<br>

                                <button type="submit" value="submit">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- ################################################################################################ -->
                </section>
            </figure>
            <!-- ################################################################################################ -->

        </div>

    </main>
</div>

<script>
    function activar() {

        let nosotros = document.getElementById("sugerencias");
        nosotros.classList.add("active");

    }


    window.onload = activar();
</script>
<?= $this->endSection() ?>