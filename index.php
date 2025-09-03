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

  <section class="about-hero">
    <h1>About Us</h1>
    <p>Building resumes that land jobs</p>
  </section>

  <!-- Mission Section -->
  <section class="about-mission">
    <h2>Our Mission</h2>
    <p>
      We aim to make resume building simple, professional, and effective for everyone — 
      whether you’re a student or a working professional. Our tool helps you showcase your skills 
      with clarity and confidence.
    </p>
  </section>

  <!-- Features Section -->
  <section class="about-features">
    <div class="feature">
      <i class="ri-file-copy-2-line"></i>
      <h3> Easy-to-use Templates</h3>
      <p>Create resumes quickly with beautiful, customizable templates.</p>
    </div>
    <div class="feature">
      <i class="ri-lock-fill"></i> 
      <h3> Secure & Private</h3>
      <p>Your data stays safe, encrypted, and confidential at all times.</p>
    </div>
    <div class="feature">
      <i class="ri-speed-fill"></i>
      <h3> Fast & Free</h3>
      <p>Generate professional resumes instantly at no cost.</p>
    </div>
  </section>

  <!-- Team Section -->
  <section class="about-team">
    <h2>About the Project</h2>
    <p>
      This Resume Builder was created as part of a BCA Final Year Project to empower students and 
      professionals with a reliable tool for building impactful resumes. Designed with simplicity 
      and modern design principles in mind, it ensures you stand out in your job applications.
    </p>
  </section>

  <!-- Call to Action Section -->
  <section class="about-cta">
    <h2>Ready to Create Your Professional Resume?</h2>
    <a href="resume.html" class="cta-btn">Start Building</a>
  </section>
  <section>
    <?php include 'templates/footer.php'; ?>
  </section>
</body>
</html>
