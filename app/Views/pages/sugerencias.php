<?= $this->extend('./layout/principal.php') ?>


<?= $this->section('contenido') ?>

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <div class="posts">
            <figure class="group">
                <section id="callback" class="hoc clear">
                    <!-- ################################################################################################ -->
                    <div>
                        <h6 class="heading">Torquent per conubia</h6>
                        <p class="btmspace-30">Sed non tortor class aptent taciti sociosqu ad litora nostra per inceptos himenaeos vivamus vitae.</p>
                        <form method="post" action="#">
                            <fieldset>
                                <input type="text" value="" placeholder="Name">
                                <input type="text" value="" placeholder="Email">
                                <button type="submit" value="submit">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- ################################################################################################ -->
                </section>
            </figure>
            <!-- ################################################################################################ -->

        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
<?= $this->endSection() ?>