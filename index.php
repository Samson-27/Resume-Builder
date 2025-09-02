<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
  <title>Resume Builder</title>
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <!-- Hero Section -->
  <section class="hero-section">
    <?php include 'templates/header.php'; ?>
    <div class="hero-center">
      <div class="hero-text">
        <h1>Build Your Professional <br />Resume in Minutes</h1>
        <p>Simple, fast, and customizable templates to land your dream job.</p>
        <a href="#" class="btn">Start Now</a>
      </div>
      <img src="assets/uploads/resume.png" alt="resume img" class="img">
    </div>
  </section><br /><br /><br />

  <!-- Features -->

  <section class="features">
    <div class="feature-header">
      <h2>Powerful Tools To Build Your Resume</h2>
      <p>Create, edit, and customize resumes quickly with smart features designed to make you stand out.</p>
    </div>
    <div class="feature-container">

      <div class="feature-box">
        <i class="ri-lock-fill"></i>
        <h3>Secure Authentication</h3>
        <p>Protect your account with encrypted login and strong password security.</p>
      </div>

      <div class="feature-box">
        <i class="ri-time-line"></i>
        <h3>Real-time Preview</h3>
        <p>See your resume as you build it in real-time.</p>
      </div>

      <div class="feature-box">
        <i class="ri-robot-3-line"></i>
        <h3>Easy with AI</h3>
        <p>Quickly generate formal phrases and summaries to sound professional.</p>
      </div>

      <div class="feature-box">
        <i class="ri-file-download-fill"></i>
        <h3>Easy Download</h3>
        <p>Download your resume in PDF format with just one click.</p>
      </div>

      <div class="feature-box">
        <i class="ri-file-copy-2-line"></i>
        <h3>Professional Templates</h3>
        <p>Choose from modern, recruiter-approved templates to stand out.</p>
      </div>

      <div class="feature-box">
        <i class="ri-save-line"></i>
        <h3>Save & Edit</h3>
        <p>Save your work and edit it anytime in the future.</p>
      </div>

    </div>
  </section>

  <!-- About Us -->
  <section class="about">
    <div class="container">
      <h2>ABOUT</h2>
      <div class="tabs">
        <button class="btn">What We Do</button>
        <button class="btn">Our Vision</button>
        <button class="btn">Our Skills</button>
      </div>
      <p>
        Welcome to Resume Builder your one-stop solution for creating
        professional resumes with ease. We know how stressful job hunting can
        be, and that’s why we built this platform to make resume building
        simple, quick, and effective. Whether you’re a student, a fresher, or
        a professional, our goal is to help you craft a resume that truly
        highlights your skills and achievements.
      </p>
      <div class="about-boxes">
        <div class="about-item">
          <h3>Web design</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="about-item">
          <h3>Digital production</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="about-item">
          <h3>Internet marketing</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <?php include 'templates/footer.php'; ?>
  </section>
</body>
</html>
