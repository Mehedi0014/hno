
  <!-- Include header.php file here ...................................... -->
  <?php include("header.php"); ?>

  <!-- Include sub_header.php file here ...................................... -->
  <?php include("sub_header.php"); ?>


    <!-- Banner ...................................... -->
    <div id="stimm_sprach" class="all_page_combined_design">
      <div class="container">
        <div class="row">
          <div class="col-8 offset-2">
            <img src="assets/img/stimm_sprach/stimm_sprach_title.gif" alt="stimm_sprach">
          </div> <!-- col-8 offset-2 -->                
        </div> <!-- row -->
      </div> <!-- container -->
    </div>


    <!-- Mani content area ...................................... -->
    <section id="stimm_sprach_desc" class="all_page_combined_design_desc">
      <div class="container-fluid">


        <!-- Include sidebar_menu.html file here ...................................... -->
        <div class="row">
          <div class="col-sm-3">
            <?php include("sidebar_menu.php"); ?>
          </div> <!-- col-sm-3 -->


          <div class="col-sm-9">
            <div class="row box_shadow">

            <section id="contact_form_and_details">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="heading">
                      <h1>KONTAKT</h1>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="text" name="name" class="form-control" id="inputName_1" placeholder="Name, Vorname *" required>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" name="email" class="form-control" id="inputEmail_1" placeholder="E-mail *" required>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" name="street" class="form-control" id="inputHausnummer_1" placeholder="Straße, Hausnummer">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" name="postcode" class="form-control" id="plz_1" placeholder="PLZ, Ort">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" name="phone" class="form-control" id="telefon_1" placeholder="Telefon">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" name="offer_number" class="form-control" id="inputAngebotsnummer1" placeholder="Angebotsnummer (wird ggf. automatisch ausgefüllt)">
                        </div>
                        <div class="form-group col-12">
                          <textarea name="message" class="form-control" id="inputIhre_1" placeholder="Ihre Nachricht" rows="4"></textarea>
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">ABSENDEN</button>
                    </form>
                  </div> <!--Class : col-md-8 -->

                  <div class="contact-details col-md-4">
                    <div>
                      <h4>Impressum</h4>
                    </div>
                    <div>
                      <i class="far fa-envelope"></i><a href="#"> E-Mail: praxishno-riemann.de</a>
                    </div>
                    <div class="span">
                      <span>
                      Email bitte nur in dringlichen Fällen
                      oder nach persönlicher Rücksprache
                      per Email keine Terminvereinbarung
                      Und bitte ganz klein und versteckt meine
                      </span>
                    </div>
                    <div>
                      <i class="fas fa-mobile-alt"></i><span> Handy-Nr: +49-172-6203727</span>
                    </div>
                    <div class="span">
                      <span>Handy-Nr. (nur in Notfällen)</span>
                    </div>
                    <div>
                        <i class="fas fa-fax"></i><span> Fax: 0621-4181282</span>
                    </div>
                  </div> <!--Class : col-md-4 -->
                </div><!--Class : row-->
              </div> <!--Class : container-->
            </section> <!--Id : contact_form_and_details-->















 
            </div> <!-- row -->

          </div> <!-- col-sm-9 -->

          <div class="row mx-auto transparent">
            <!-- Include sub_header.php file here ...................................... -->
            <?php include "footer_menu.php"; ?>
          </div> <!-- row -->
        </div> <!-- Row Position One -->        

      </div> <!-- container-fluid -->
    </section> <!-- stimm_sprach_desc -->




    <!-- Footer include here  ...................................... -->
    <?php include "footer.php"; ?>