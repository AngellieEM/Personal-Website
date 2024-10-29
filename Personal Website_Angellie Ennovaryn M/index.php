<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="image-box">
          <img src="./assets/images/my-image.jpg" style="border-radius: 10%" alt="Angellie Ennovaryn M" width="150">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Angellie Ennovaryn">Angellie Ennovaryn</h1>
          <h1 class="name" title="Mertadana"> Mertadana</h1>

          <a class="title" href="https://www.uc.ac.id/" target="_blank"
            style="text-decoration: none; color: white;">Student of Ciputra University</a>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:aennovaryn@student.ciputra.ac.id" target="_blank"
                class="contact-link">aennovaryn@student.ciputra.ac.id</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="logo-whatsapp"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Whatsapp Number</p>

              <a href="https://wa.link/r9wcqn" target="_blank" class="contact-link"
                style="text-decoration: none; color: white;">082139970798</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">November 6, 2002</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Surabaya, East Java, Indonesia</address>
            </div>

          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I am an active student majoring in ISB (Information System for Business)'21
            at Ciputra University through the 2021 Outstanding Achievement Scholarship.
          </p>

          <p>
            Apart from studying in college, I also take part in various campus activities both in
            organizations and committees. Apart from that, I do some of my hobbies in my spare time
            to make me calmer, fresher and happier. Outside campus, I spend more time with my family
            and boyfriend. But don't forget to serve both in the church and in the foundation.
          </p>
        </section>


        <!--
          - family
        -->

        <section class="family">

          <h3 class="h3 family-title">My Closest Person</h3>

          <ul class="family-list">

            <li class="family-item">

              <div class="family-image">
                <img src="./assets/images/my-main-family.jpg" style="border-radius: 10%" alt="My main family"
                  width="120">
              </div>

              <div class="family-content-box">
                <h4 class="h4 family-item-title">My main family</h4>

                <p class="family-item-text">
                  Who always support and who always understand my every need.
                </p>
              </div>

            </li>

            <li class="family-item">

              <div class="family-image">
                <img src="./assets/images/my-dad-family.jpg" style="border-radius: 10%" alt="My dad family" width="120">
              </div>

              <div class="family-content-box">
                <h4 class="h4 family-item-title">My dad's family</h4>

                <p class="family-item-text">
                  They are very diverse but I still feel the warmth and oneness of heart among them.
                </p>
              </div>

            </li>

            <li class="family-item">

              <div class="family-image">
                <img src="./assets/images/my-mom-family.jpg" style="border-radius: 10%" alt="My mom family" width="120">
              </div>

              <div class="family-content-box">
                <h4 class="h4 family-item-title">My mom's family</h4>

                <p class="family-item-text">
                  They are the ones who can cheer me up and forget my problems for a moment when we get together.
                </p>
              </div>

            </li>

            <li class="family-item">

              <div class="family-icon-box">
                <img src="./assets/images/my-boyfriend.jpg" style="border-radius: 10%" alt="My boyfriend" width="120">
              </div>

              <div class="family-content-box">
                <h4 class="h4 family-item-title">My boyfriend</h4>

                <p class="family-item-text">
                  He is always there and always guides me in facing every problem I experience.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - friends
        -->

        <section class="friends">

          <h3 class="h3 friends-title">My Friends</h3>

          <ul class="friends-list has-scrollbar">

            <li class="friends-item">
              <div class="content-card" data-testimonials-item>

                <figure class="friends-avatar-box">
                  <img src="./assets/images/best-friends.jpg" style="border-radius: 10%" alt="Bestfriends" width="60"
                    data-testimonials-avatar>
                </figure>

                <h4 class="h4 friends-item-title" data-testimonials-title>Bestfriends</h4>

                <div class="friends-text" data-testimonials-text>
                  <p>
                    They are my best friends. I know them since we entered this college.
                    At first we felt awkward getting to know each other. However, as time
                    went on, we got even closer and are now friends as well as a family who
                    support each other both in joy and sorrow. When we were together, there
                    was not a day without joking.
                  </p>
                </div>

              </div>
            </li>

            <li class="friends-item">
              <div class="content-card" data-testimonials-item>

                <figure class="friends-avatar-box">
                  <img src="./assets/images/mentee.jpg" style="border-radius: 10%" alt="Mentee" width="60"
                    data-testimonials-avatar>
                </figure>

                <h4 class="h4 friends-item-title" data-testimonials-title>Mentee</h4>

                <div class="friends-text" data-testimonials-text>
                  <p>
                    They are the mentees that I have handled for almost a year. I was a
                    mentor who was given the task of guiding several children and they were
                    the ones I guided from the start of entering college until now. Initially
                    there were some of them who were still shy but some were already hyper active.
                    We know each other and often meet so that I already think of them as my own
                    brothers and sisters and even consider them as my children because I often nag
                    them either because of small or big things.
                  </p>
                </div>

              </div>
            </li>

            <li class="friends-item">
              <div class="content-card" data-testimonials-item>

                <figure class="friends-avatar-box">
                  <img src="./assets/images/mentors.jpg" style="border-radius: 10%" alt="Mentors" width="100"
                    data-testimonials-avatar>
                </figure>

                <h4 class="h4 friends-item-title" data-testimonials-title>Mentors</h4>

                <div class="friends-text" data-testimonials-text>
                  <p>
                    They are the great people I met when I joined the mentoring department.
                    At first I thought I wouldn't get along with them and would tend to be
                    individualistic when hanging out together. But in fact it was different
                    from what I imagined, they were very kind and friendly. They are very
                    active and are not shy about getting acquainted with new people they meet
                    at that time. From them I learned a lot of new things to expand my relationships
                    and from them I learned a lot about professionalism when organizing or working in
                    a group.
                  </p>
                </div>

              </div>
            </li>

            <li class="friends-item">
              <div class="content-card" data-testimonials-item>

                <figure class="friends-avatar-box">
                  <img src="./assets/images/gdsc.jpg" style="border-radius: 10%" alt="GDSC" width="100"
                    data-testimonials-avatar>
                </figure>

                <h4 class="h4 friends-item-title" data-testimonials-title>Friends in GDSC</h4>

                <div class="friends-text" data-testimonials-text>
                  <p>
                    They are friends who are no less great that I met at the most unexpected time.
                    At first I was just for fun registering in the organization, but in fact I was
                    accepted and met them. I learned a lot of new things there through the various
                    events we held, I also got stories from the experiences of the older siblings
                    there regarding the competitions and internships they had. I'm so grateful to
                    have met them.
                  </p>
                </div>

              </div>
            </li>

            <li class="friends-item">
              <div class="content-card" data-testimonials-item>

                <figure class="friends-avatar-box">
                  <img src="./assets/images/pmk.JPG" style="border-radius: 10%" alt="GDSC" width="100"
                    data-testimonials-avatar>
                </figure>

                <h4 class="h4 friends-item-title" data-testimonials-title>Friends in PMK</h4>

                <div class="friends-text" data-testimonials-text>
                  <p>
                    They are friends who are no less great that I met at the most unexpected time.
                    At first I was just for fun registering in the organization, but in fact I was
                    accepted and met them. I learned a lot of new things there through the various
                    events we held, I also got stories from the experiences of the older siblings
                    there regarding the competitions and internships they had. I'm so grateful to
                    have met them.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - friends modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="friends-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <!-- <time datetime="2021-06-14">14 June, 2021</time> -->

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - hobbies   
        -->

        <section class="hobbies">

          <h3 class="h3 hobbies-title">hobbies</h3>

          <ul class="hobbies-list has-scrollbar">

            <li class="hobbies-item">
              <img src="./assets/images/undraw_compose_music_re_wpiw.svg" alt="singing">
            </li>

            <li class="hobbies-item">
              <img src="./assets/images/undraw_camera_re_cnp4.svg" style="min-width: 80%;" alt="taking photos">
            </li>

            <li class="hobbies-item">
              <img src="./assets/images/undraw_traveling_yhxq.svg" style="min-width: 80%;" alt="traveling">
            </li>

            <li class="hobbies-item">
              <img src="./assets/images/undraw_camping_noc8.svg" style="min-width: 80%;" alt="camping">
            </li>

            <li class="hobbies-item">
              <img src="./assets/images/undraw_reading_re_29f8.svg" style="min-width: 80%;" alt="reading">
            </li>

            <li class="hobbies-item">
              <img src="./assets/images/undraw_cooking_p7m1.svg" alt="cooking">
            </li>

          </ul>

        </section>


        <!--
          - language   
        -->

        <section class="language">

          <h3 class="h3 language-title">languages</h3>

          <ul class="language-list has-scrollbar">

            <li class="language-item">
              <img src="./assets/images/flag-indonesia.png" alt="singing">
            </li>

            <li class="language-item">
              <img src="./assets/images/flag-united-states.png" alt="taking photos">
            </li>

            <li class="language-item">
              <img src="./assets/images/flag-china.png" alt="taking photos">
            </li>

            <li class="language-item">
              <img src="./assets/images/flag-germany.png" alt="taking photos">
            </li>

            <li class="language-item">
              <img src="./assets/images/flag-south-korea.png" alt="taking photos">
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Ciputra University of Surabaya</h4>

              <span>2021-2025</span>

              <p class="timeline-text">
                I majored in Information Systems for Business because since High School I
                really wanted to learn about Web Design and Data Science. Apart from studying
                courses appropriate to the major, here I was also taught how to create a business
                and how to develop it.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">State Senior High School 13 of Surabaya</h4>

              <span>2018-2021</span>

              <p class="timeline-text">
                I majored in Natural Sciences where I studied Biology, Physics, Chemistry, General
                and Special Mathematics, and other general subjects such as History, Civics,
                Indonesian Language, and others. I took this major because I am very good at and like Mathematics and
                Chemistry.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Bell Junior High School</h4>

              <span>2015 — 2018</span>

              <p class="timeline-text">
                At this school level, I tend to prefer to be alone to study a lot,
                we could say I'm a bookworm. As a result, I always get first place
                in class every year. Besides that, I also actively participated in
                singing competitions and won several city-level competitions.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Bright Kiddie Primary School</h4>

              <span>2009 — 2015</span>

              <p class="timeline-text">
                I really enjoyed this period because the subjects were easy for me
                to understand and I had lots of time to play and hang out with my
                friends. Because the subjects are fairly easy, I always get first
                place every year. This is what ultimately made my friends stay away
                from me and my friendship life began to change.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Bright Kiddie Kindergarten</h4>

              <span>2007 — 2009</span>

              <p class="timeline-text">
                The period when I had a lot of time to learn while playing. It
                was a really fun period, but at that time my parents were a little
                hard on me so that I had a good foundation to be able to enter the
                next level of school. And as a result, they succeeded in educating
                me to be a pretty smart kid at school.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="people-outline"></ion-icon>
            </div>

            <h3 class="h3">Organization</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Coordinator of Mentors</h4>
              <h5 class="h5 timeline-item-title"><em>Information System for Business Major</em></h5>

              <span>2023 — Present</span>

              <p class="timeline-text">
                The task of being a Mentor Coordinator is to coordinate
                the mentors so that mentoring can run well for the next
                one year. In addition, the Coordinator Mentor also helps
                in solving problems faced by mentors in handling mentee
                (new students).
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Mentor</h4>
              <h5 class="h5 timeline-item-title"><em>Information System for Business Major</em></h5>

              <span>2022 — Present</span>

              <p class="timeline-text">
                The task of being a Mentor is to guide new students in their
                adaptation to a new environment, become a conduit for information
                on lectures at UC, provide weekly assistance on the development of
                new students in their lectures, and become a place to discuss the
                problems they face.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Coordinator of PaW</h4>
              <h5 class="h5 timeline-item-title"><em>UKM PMK (Christian Student Association)</em></h5>

              <span>2022 — Present</span>

              <p class="timeline-text">
                The duties of being a PaW Coordinator are to set the PaW schedule and
                program for the next 1 year, interview potential new PaW members,
                prepare studio space for rehearsals by contacting the studio owner,
                and handle letters for PaW needs.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Event Team </h4>
              <h5 class="h5 timeline-item-title"><em>Google Developer Student Club UC</em></h5>

              <span>2022 — Present</span>

              <p class="timeline-text">
                The task of being an event team member is finding topics and
                material to be presented to GDSC participants, making an
                overview of events for GDSC events, and for myself being the MC
                at several GDSC events.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="happy-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <div class="view_jason">
            <?php include('view_experience.php') ?>
          </div>

        </section>


        <section class="skill">

          <h3 class="h3 skills-title">My Computer Skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="75">75%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic design</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Data Science</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Business Data Communication</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Data Warehousing</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Cloud Computing</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

          </ul>

        </section>

        <br>

        <section class="skill">

          <h3 class="h3 skills-title">My Other Skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Social Skills</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Photography Skill </h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Management Skill</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Critical Thinking Skills</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Empathy and Understanding</h5>
                <data value="98">98%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 98%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Programming</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Prototype</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Photography</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>BMC</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Programming</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Prototype</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Photography</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>BMC</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="bmc">
              <a href="https://www.canva.com/design/DAFclEngMzI/fFENIZk_IqggbNyEVpu4ug/edit?utm_content=DAFclEngMzI&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Ocposa - Octopus Potato with Sausage</h3>

                <p class="project-category">BMC</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="programming">
              <a href="https://github.com/AngellieEM/cek-bilangan-prima-week-12.git" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Check Prime Numbers</h3>

                <p class="project-category">Programming</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="prototype">
              <a href="https://www.figma.com/file/Fgb293LtBWayxedFZaLrZI/Untitled?node-id=0%3A1&t=UQRx68Cf3w9b0D1u-1"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Catalog Figma</h3>

                <p class="project-category">Prototype</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="photography">
              <a href="https://drive.google.com/file/d/1lXUrNzX35SOGGYHVAWOcH7Vh-c7xHmni/view?usp=share_link"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Blue Sky</h3>

                <p class="project-category">Photography</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="prototype">
              <a href="https://www.figma.com/file/CvpFcZXViK9rsEV6GwqKjt/Figma-Dashboard-SAD?node-id=0%3A1&t=3pr9CGPIXM6WfAEF-1"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.jpg" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Dashboard Figma</h3>

                <p class="project-category">Prototype</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="programming">
              <a href="https://github.com/AngellieEM/GAME1.git" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-2.jpg" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Game Code</h3>

                <p class="project-category">Programming</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="prototype">
              <a href="https://docs.google.com/document/d/1jA94iqrMiq6VygmM5uCQVgPsx4YaEcLkRRgHnS5MtLY/edit?usp=sharing"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.jpg" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">My Facility</h3>

                <p class="project-category">Prototype</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="photography">
              <a href="https://drive.google.com/file/d/1vDbgqBDvy09rEGKTRCduGzpPkVa01Fub/view?usp=sharing"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.jpg" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Praise Lord</h3>

                <p class="project-category">Photography</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="bmc">
              <a href="https://www.canva.com/design/DAE4ZyiDiKw/Y8qnxjzyrqPzcLtNoMSbyg/edit?utm_content=DAE4ZyiDiKw&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
                target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">AnBuVi</h3>

                <p class="project-category">BMC</p>

              </a>
            </li>

          </ul>

        </section>

      </article>



      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://maps.google.com/maps?q=surabaya&t=&z=10&ie=UTF8&iwloc=&output=embed" width="400"
              height="300" loading="lazy"></iframe>

          </figure>
        </section>

        <section class="contact-detail">

          <h3 class="h3 form-title">Detail Contact - Social Networks</h3>

          <div class="detail-contact">

            <div class="separator"></div>

            <ul class="contacts-list">

              <li class="contact-item">

                <div class="icon-box">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </div>

                <div class="contact-info">
                  <p class="contact-title">LinkedIn</p>

                  <a href="https://www.linkedin.com/in/angellie-ennovaryn-mertadana-a32585269" target="_blank"
                    class="contact-link">Angellie Ennovaryn Mertadana</a>
                </div>

              </li>

              <li class="contact-item">

                <div class="icon-box">
                  <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>

                <div class="contact-info">
                  <p class="contact-title">Line Apps</p>

                  <a href="https://line.me/ti/p/6kp850rMex" target="_blank" class="contact-link"
                    style="text-decoration: none; color: white;">angelliennovaryn</a>
                </div>

              </li>

              <li class="contact-item">

                <div class="icon-box">
                  <ion-icon name="logo-instagram"></ion-icon>
                </div>

                <div class="contact-info">
                  <p class="contact-title">Instagram</p>

                  <a href="https://instagram.com/angellieem?igshid=YmMyMTA2M2Y=" target="_blank" class="contact-link"
                    style="text-decoration: none; color: white;">angellieem</a>
                </div>

              </li>

              <li class="contact-item">

                <div class="icon-box">
                  <ion-icon name="logo-tiktok"></ion-icon>
                </div>

                <div class="contact-info">
                  <p class="contact-title">TikTok</p>

                  <a href="https://www.tiktok.com/@angieanakbaek?_t=8bSMtNcLPfO&_r=1" target="_blank"
                    class="contact-link" style="text-decoration: none; color: white;">angieanakbaek</a>
                </div>

              </li>

              <li class="contact-item">

                <div class="icon-box">
                  <ion-icon name="logo-youtube"></ion-icon>
                </div>

                <div class="contact-info">
                  <p class="contact-title">YouTube</p>

                  <a href="https://www.tiktok.com/@angieanakbaek?_t=8bSMtNcLPfO&_r=1" target="_blank"
                    class="contact-link" style="text-decoration: none; color: white;">angellieennovarynm332</a>
                </div>

              </li>


            </ul>

          </div>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <footer>
    <div class="separator"></div>

    <p class="footer-text">Get connected with me on social networks:</p>

    <ul class="social-list">

      <li class="social-item">
        <a href="https://www.linkedin.com/in/angellie-ennovaryn-mertadana-a32585269" target="_blank"
          class="social-link">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

      <li class="social-item">
        <a href="https://line.me/ti/p/6kp850rMex" target="_blank" class="social-link">
          <ion-icon name="chatbubbles-outline"></ion-icon>
        </a>
      </li>

      <li class="social-item">
        <a href="https://instagram.com/angellieem?igshid=YmMyMTA2M2Y=" target="_blank" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li class="social-item">
        <a href="https://www.tiktok.com/@angieanakbaek?_t=8bSMtNcLPfO&_r=1" target="_blank" class="social-link">
          <ion-icon name="logo-tiktok"></ion-icon>
        </a>
      </li>

      <li class="social-item">
        <a href="https://www.youtube.com/@angellieennovarynm332/featured" target="_blank" class="social-link">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
      </li>

    </ul>

    </div>
  </footer>


</body>



</html>