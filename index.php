<?php
//Initialize the session
session_start();


if (isset($_SESSION['email'])) {
  header("Location: dashboard.php");
  exit();
}
?>


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
        <p>Quickly generate professional resume in munites with help of ai.</p>
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

  <!-- How It Works Section -->
  <section class="how-it-works">
    <h2>How It Works</h2>
    <p class="section-sub">Create your professional resume in just a few simple steps.</p>
    <div class="steps">
      <div class="step">
        <div class="circle">1</div>
        <h3>Sign Up</h3>
        <p>Create your free account to get started.</p>
      </div>
      <div class="step">
        <div class="circle">2</div>
        <h3>Choose a Template</h3>
        <p>Select a template that best fits your style and industry.</p>
      </div>
      <div class="step">
        <div class="circle">3</div>
        <h3>Fill in Your Details</h3>
        <p>Enter your personal information, experience, and skills.</p>
      </div>
      <div class="step">
        <div class="circle">4</div>
        <h3>Download & Share</h3>
        <p>Download your resume as a PDF and start applying for jobs.</p>
      </div>
    </div>
  </section>

  <!-- Resume Templates Section -->
  <section class="templates">
    <h2>Explore Our Resume Templates</h2>
    <div class="template-grid">
      <div class="template-card">
        <img src="assets/uploads/2.png" alt="Modern Template">
        <h4>Modern Template</h4>
        <p>A sleek and contemporary design perfect for showcasing your skills and experience.</p>
      </div>
      <div class="template-card">
        <img src="assets/uploads/1.png" alt="Creative Template">
        <h4>Creative Template</h4>
        <p>A visually appealing template that highlights your creativity and personality.</p>
      </div>
      <div class="template-card">
        <img src="assets/uploads/3.png" alt="Professional Template">
        <h4>Professional Template</h4>
        <p>A classic and formal template ideal for traditional industries.</p>
      </div>
      <div class="temp-btn-wrap">
        <a href="#" class="temp-btn">Choose Template</a>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="about-cta">
    <h2>Ready to Create Your Professional Resume?</h2>
    <a href="resume.html" class="cta-btn">Start Building</a>
  </section>

  <!--Footer-->
  <section>
    <?php include 'templates/footer.php'; ?>
  </section>

  <!--Javascript-->
  <script src="assets/script.js"></script>
</body>

</html>
