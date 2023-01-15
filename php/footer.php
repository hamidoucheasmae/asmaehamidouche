
    <script>
      let cursor = document.getElementById('cursor');
      const onMouseMove = (event) => {
        cursor.style.left = event.pageX + "px";
        cursor.style.top = event.pageY + "px";

        if (event.target.hasAttribute("cursor-type")) {
          let cursorSize = event.target.getAttribute("cursor-type");
          cursor.classList.add(cursorSize);
        } else {
          cursor.classList = "";
        }
      };

      document.addEventListener("mousemove", onMouseMove);
    </script>
    


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/utils/Draggable.min.js"></script>

  <script src="js/assets/bootstrap.js"></script>
    <script src="js/assets/imagesloaded.pkgd.min.js"></script>
    <script src="js/assets/validation.js"></script>
    <script src="js/assets/packery.pkgd.min.js"></script>
    <script src="js/assets/velocity.min.js"></script>
    <script src="js/assets/typed.min.js"></script>
    <script src="modules/titan-slider/titan-slider.js"></script>
    <script src="modules/tera-lightbox/tera-lightbox.js"></script>
    <script src="js/assets/animsition.js"></script>
    <script src="js/functions.js"></script>

    <script src="js/slider.js"></script>
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
<footer>
        <div class="container">
          <div class="row">

          </div>
        </div>
      </footer>
      <footer class="bottom">
        <div class="container">
          <div class="row">
           
            <div class="col-md-6 text-center">
              <p> &copy; Asmae Hamidouche. All rights reserved.</p>
            </div>
         
            <div class="col-md-6 text-center">
              <ul class="social-links">
                <li> <a href="https://www.linkedin.com/in/asmae-hamidouche/" class="fa fa-linkedin"></a></li>
                <li> <a href="https://www.instagram.com/ux.asmae/" class="fa fa-instagram"></a></li>
                <li> <a href="https://twitter.com/AsmaeHamidouche" class="fa fa-twitter"></a></li>
                <li> <a href="https://www.behance.net/asmaehamidouche" class="fa fa-behance"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      </body>
</html>