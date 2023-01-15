     <!-- php header-->
     <?php include('./php/header.php'); ?>

      <section class="content">
        <div class="row hero text-center"> 
          <div class="col-md-12 ">
            <div id="cursor"></div>
            <h1 class="hover-link"  cursor-type="hover">Artinove - Give Me Your Feedback</h1>
        </div>

<!-- begin slider -->
            <svg id="gallery" class="slider1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 800" width="1100" height="800">
              <defs>
                <mask id="masterMask">
                  <rect x="50" y="100" width="1000" height="600" fill="#fff" />
                  <rect x="50" y="600" width="1000" height="200" fill="#fff" rx="15" ry="15" />
                </mask>
                <mask id="slideMask">
                  <rect id="theSquare" x="-950" y="100" width="1000" height="700" fill="#fff" />
                </mask>
                <mask id="captionMask">
                  <rect x="50"  y="0" width="1000" height="100" fill="#fff"/>
                </mask>
                <mask id="draggerMask">
                  <circle cx="50" cy="450" r="30" fill="#fff"/>
                  <circle cx="1050" cy="450" r="30" fill="#fff"/>
                  <rect x="50" y="0" width="1000" height="800" fill="#fff" rx="18" ry="18" />
                </mask>
              </defs>
              
              <g mask="url(#masterMask)">
                <g class="allPics">
                  <image xlink:href="images/portfolio/before.png" x="50" y="100"  width="1000" height="700" />
                  <!-- <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/314556/before01.jpg" x="50" y="800" width="1000" height="700" />
                  <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/314556/before02.jpg" x="50" y="1500" width="1000" height="700" /> -->
                </g>
                <g mask="url(#slideMask)">
                  <g class="allPics">
                    <image xlink:href="images/portfolio/after.png" x="50" y="100" width="1000" height="700" />
                    <!-- <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/314556/after01.jpg" x="50" y="800" width="1000" height="700" />
                    <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/314556/after02.jpg" x="50" y="1500" width="1000" height="700" /> -->
                  </g>
                </g>
              </g>
            
              <g mask="url(#draggerMask)">
                <g id="dragger">
                  <line id="divider" x1="50" y1="100" x2="50" y2="800" fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10"/>
                  <circle id="draggerBase" cx="50" cy="450" r="30" fill="#F77432"/>
                  <circle id="outline" cx="50" cy="450" r="26" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                  <polygon id="leftTriangle" points="67.21 449.62 60.11 453.73 53 457.83 53 449.62 53 441.42 60.11 445.52 67.21 449.62" fill="#fff"/>
                  <polygon id="rightTriangle" points="32.79 449.62 39.89 445.52 47 441.42 47 449.62 47 457.83 39.89 453.73 32.79 449.62" fill="#fff"/>
                </g>
              </g>
            </svg>
<!-- end -->
          

          <div class="container hover-link">
            <div class="row">
              <div class="col-md-12 text-center  box-overview-test">
                
                
                <h3  style="color: #FF7D51 !important;" >Overview</h3>
                  <p class="infotanger-p ">
                    As a UX/UI designer intern at Foliatech, I am collaborating with my mentor to enhance the user experience of the "Give Me Your Feedback" interface. Our goal is to optimize the feedback process for increased engagement and enjoyment for users. We aim to create a seamless and intuitive experience  for users to provide valuable feedback and insights on artinove.
                  </p>
              
              </div> 
              <div class="col-md-3 text-center box-overview-test ">
                <h3 style="color: #FF7D51 !important; margin-bottom: 5px !important;">Role</h3>
                <br><p class="infotanger-p">UI/UX Designer </p>
              </div>
              <div class="col-md-3 text-center box-overview-test">
                <h3 style="color: #FF7D51 !important;margin-bottom: 5px !important;">Time</h3>
                <br><p class="infotanger-p">july 2022</p>
              </div>

              <div class="col-md-3 text-center box-overview-test">
                <h3 style="color: #FF7D51 !important;margin-bottom: 5px !important;">Time</h3>
                <br><p class="infotanger-p">july 2022</p>
              </div>

              <div class="col-md-3 text-center box-overview-test">
                <h3 style="color: #FF7D51 !important;margin-bottom: 5px !important;">Time</h3>
                <br><p class="infotanger-p">july 2022</p>
              </div>
              
              
            </div>
          </div>

      <!--  -->
          <section class="hero text-center">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <h2>Thank you for watching</h2>
              
                  <!-- <a href="https://hamidoucheasmae.github.io/Solicode.co/"><button class="btn btn-default">You can view the website live</button> </a> -->
                </div>
              </div>
            </div>
          </section>
       <!--  -->

        
          <div class="row mt-xl">
            <div class="col-md-6 col-md-offset-3">
              <div class="pagination"><a href="#" class="disabled previous ion-ios-arrow-thin-left pull-left"></a><a href="index.php" class="btn btn-default">All project</a><a href="#" class="next ion-ios-arrow-thin-right pull-right">     </a></div>
            </div>
          </div>
        </div>
      </section>

     
      <!-- php footer-->
      <?php include('./php/footer.php'); ?>



    </div>

 
  </body>
</html>
