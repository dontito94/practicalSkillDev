@extends('layouts.app')


@section('content')





<!-- Page Title Section -->
<div class="section page-title text-center" style="background-image: url('image/background04.jpg');">
  <div class="inner">
    <h1 class="light">About Us</h1>
    <h3 class="light">Get To know About PRASDEL</h3>
  </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Tabs Section -->
<div class="section tabs-section about-page">
  <ul class="nav nav-tabs jobpress-dynamic-tabs flex space-center items-center no-column">
      <li class="active"><a data-toggle="tab" href="#company"><i class="ion-ios-glasses-outline"></i>Company</a></li>
      <li><a data-toggle="tab" href="#how-it-works"><i class="ion-ios-cog-outline"></i>How it works</a></li>
      <li><a data-toggle="tab" href="#team"><i class="ion-ios-person-outline"></i>Team</a></li>
      <li><a href="/Help"><i class="ion-ios-help-empty"></i>Faq</a></li>
      <li><a href="/contact"><i class="ion-ios-email-outline"></i>Contact Us</a></li>
  </ul> <!-- end .jobpress-dynamic-tabs -->

  <div class="tab-content jobpress-dynamic-tabs-content">

      <div id="company" class="tab-pane company-tab-content text-center fade in active">
          <div class="testimonial">

            <p><q>Practical Skills Development Link  <strong>(PRASDEL)</strong> is the system that is conceived to allow students from different Tertiary level <strong>educational institutions</strong> to register themselves for acquisition of practical training attachments.The systems solves the challenges of students acquiring organisations for field/internship work as well as Organisations recruiting for suitable candidates for the same.</q></p>
          </div> <!-- end .testimonial -->
          <div class="core-values">
            <div class="core-values-inner">
              <div class="container">
                <div class="images">
                  <div class="images-inner flex space-between no-wrap items-center">
                    <div class="image-item">
                      <img src="image/company01.jpg" alt="company-office-images" class="img-responsive">
                    </div> <!-- end .image-item -->
                    <div class="spacer-xs-m"></div>
                    <div class="image-item">
                      <img src="image/company02.jpg" alt="company-office-images" class="img-responsive">
                    </div> <!-- end .image-item -->
                    <div class="spacer-xs-m"></div>
                    <div class="image-item">
                      <img src="image/company03.jpg" alt="company-office-images" class="img-responsive">
                    </div> <!-- end .image-item -->
                  </div> <!-- end .images-inner -->
                </div> <!-- end .images -->
              </div> <!-- end .container -->
              <div class="values-text-content">
                <div class="container">
                  <div class="values-text-content-inner flex space-around no-wrap items-center">
                    <div class="vision box">
                      <div class="icon">
                        <img src="image/vision-icon.png" alt="vision-icon" class="img-responsive">
                      </div> <!-- end .icon -->
                      <h3 class="dark">Our Vision</h3>
                      <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                    </div> <!-- end .vision -->
                    <div class="spacer-md-m"></div>
                    <div class="mission box">
                      <div class="icon">
                        <img src="image/our-mission-icon.png" alt="our-mission-icon" class="img-responsive">
                      </div> <!-- end .icon -->
                      <h3 class="dark">Our Vision</h3>
                      <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                    </div> <!-- end .vision -->
                <div class="spacer-md-m"></div>
                    <div class="target box">
                      <div class="icon">
                        <img src="image/our-target-icon.png" alt="our-target-icon" class="img-responsive">
                      </div> <!-- end .icon -->
                      <h3 class="dark">Our Vision</h3>
                      <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                    </div> <!-- end .vision -->

                  </div> <!-- end .values-text-content-inner -->
                </div> <!-- end .container -->

              </div> <!-- end .values-text-content -->
            </div> <!-- end .core-values-inner -->
            <div class="background-text">
              <h1>Core Values</h1>
            </div> <!-- end .background-text -->
          </div> <!-- end .core-values -->

      <div class="section team-members-section">
        <div class="inner">
          <div class="container">
            <h1 class="section-title text-center">Boards Of Leaders</h1>
            <div class="team-members-inner-row flex space-between no-column items-center">
              <div class="team-member">
                <img src="image/team-member01.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Albert Martin</h3>
                  <h6 class="team-member-designation">Founder of Jobpress</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member02.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Kenneth Turner</h3>
                  <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member03.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Dorothy Cole</h3>
                  <h6 class="team-member-designation">HR Manager</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member04.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Alan Schmidt</h3>
                  <h6 class="team-member-designation">Product Lead</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
            </div> <!-- end .team-inner -->
          </div> <!-- end .container -->
        </div> <!-- end .inner -->
      </div> <!-- end .team-memebers-section -->
      </div> <!-- end .company-tab-content -->

      <div id="how-it-works" class="tab-pane how-it-works-tab-content fade">
        <div class="section">
          <div class="inner">
            <div class="container">
                <h3 class="text-center">Content Heading</h3>
                <p class="text-center">Your content goes here.</p>
            </div> <!-- end .container -->
          </div> <!-- end .inner -->
        </div> <!-- end .section -->
      </div> <!-- end .how-it-works-tab-content -->

      <div id="team" class="tab-pane team-tab-content fade">
      <div class="section team-members-section">
        <div class="inner">
          <div class="container">
            <div class="team-members-inner-row flex space-between no-column items-center">
              <div class="team-member">
                <img src="image/team-member01.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Albert Martin</h3>
                  <h6 class="team-member-designation">Founder of Jobpress</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member02.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Kenneth Turner</h3>
                  <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member03.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Dorothy Cole</h3>
                  <h6 class="team-member-designation">HR Manager</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member04.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Alan Schmidt</h3>
                  <h6 class="team-member-designation">Product Lead</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
            </div> <!-- end .team-inner -->

            <div class="spacer-sm"></div>

            <div class="team-members-inner-row flex space-between no-column items-center">
              <div class="team-member">
                <img src="image/team-member01.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Albert Martin</h3>
                  <h6 class="team-member-designation">Founder of Jobpress</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member02.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Kenneth Turner</h3>
                  <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member03.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Dorothy Cole</h3>
                  <h6 class="team-member-designation">HR Manager</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
              <div class="team-member">
                <img src="image/team-member04.jpg" alt="team-member-image" class="img-responsive">
                <div class="team-member-info text-center">
                  <h3 class="team-member-name">Alan Schmidt</h3>
                  <h6 class="team-member-designation">Product Lead</h6>
                  <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                    <li><a href="#0">+fb</a></li>
                    <li><a href="#0">+tw</a></li>
                    <li><a href="#0">+gp</a></li>
                    <li><a href="#0">+ins</a></li>
                  </ul> <!-- end .social-info -->
                </div> <!-- end .team-member-info -->
              </div> <!-- end .team-member -->
            </div> <!-- end .team-inner -->

            <div class="spacer-md"></div>

            <ul class="jobpress-custom-pager list-unstyled flex no-column space-center items-center">
              <li><a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a></li>
              <li><a href="#0">1</a></li>
              <li><a href="#0">2</a></li>
              <li><a href="#0">3</a></li>
              <li><a href="#0">4</a></li>
              <li><a href="#0">5</a></li>
              <li><a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a></li>
            </ul>

          </div> <!-- end .container -->
        </div> <!-- end .inner -->
      </div> <!-- end .team-members-section -->

      </div> <!-- end .team-tab-content -->

      <div id="faq" class="tab-pane faq-tab-content fade">
          <h3>Menu 2</h3>
          <p>Some content in menu 2.</p>
      </div>

      <div id="contact-us" class="tab-pane contact-us-tab-content fade">
          <h3>Menu 2</h3>
          <p>Some content in menu 2.</p>
      </div>



  </div> <!-- end .tab-content -->
</div> <!-- end .section -->

<script>
$(document).ready(function() {
  $('#Carousel').carousel({
      interval: 3000
  })
});
</script>

@endsection
