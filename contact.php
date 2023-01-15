
    <!-- php header-->
    <?php include('./php/header.php'); ?>

      <section class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1> <span class="typed">Hello</span></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- The contact form-->
              <form id="form" action="/php/mail.php" class="form row mt-md">
                <div class="col-md-6">
                  <div class="tag">What's your name? *</div>
                  <input required type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6">
                  <div class="tag">Phone number</div>
                  <input type="text" name="phone" class="form-control">
                </div>
                <div class="col-md-6">
                  <div class="tag">E-mail address *</div>
                  <input required type="email" name="email" class="form-control">
                </div>
                <div class="col-md-6">
                  <div class="tag">Website URL</div>
                  <input type="text" name="website" class="form-control">
                </div>
                <div class="col-md-12">
                  <div class="tag">Tell me what's up! *</div>
                  <textarea required name="message" class="form-control"></textarea>
                  <button id="send" type="submit" class="btn btn-default">Send message</button><span class="p-md">* These fields are required</span>
                </div>
              </form>
            </div>
            <div class="col-md-5 col-md-offset-1 content">
              <div class="mt-lg"><img src="images/contact/contact-pic-min.png" class="mt-sm mb-md">
                <p> Always love to get in touch with new people. Whether you are a potential customer, partner or someone else, I love to hear from you!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- The type animation script-->
      <script>$(function(){$(".typed").typed({strings: ["Hello", "Hola","مرحبا", "こんにちは", "Ciao", "Aloha", "Hallo"],typeSpeed: 130,loop: true  });});</script>

   <!-- php footer-->
   <?php include('./php/footer.php'); ?>
      
    </div>
    <!-- <script src="../js/assets/bootstrap.js"></script>
    <script src="../js/assets/imagesloaded.pkgd.min.js"></script>
    <script src="../js/assets/validation.js"></script>
    <script src="../js/assets/packery.pkgd.min.js"></script>
    <script src="../js/assets/velocity.min.js"></script>
    <script src="../js/assets/typed.min.js"></script>
    <script src="../modules/titan-slider/titan-slider.js"></script>
    <script src="../modules/tera-lightbox/tera-lightbox.js"></script>
    <script src="../js/assets/animsition.js"></script>
    <script src="../js/functions.js"></script> -->
    <script type="text/javascript">
      _linkedin_partner_id = "4615802";
      window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
      window._linkedin_data_partner_ids.push(_linkedin_partner_id);
      </script><script type="text/javascript">
      (function(l) {
      if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
      window.lintrk.q=[]}
      var s = document.getElementsByTagName("script")[0];
      var b = document.createElement("script");
      b.type = "text/javascript";b.async = true;
      b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
      s.parentNode.insertBefore(b, s);})(window.lintrk);
      </script>
      <noscript>
      <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4615802&fmt=gif" />
      </noscript>
  </body>
</html>