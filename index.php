<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Poly Cookies</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->
  </head>

  <body id="home">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRC582D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="hello-bar">
      <small>We don't express any legal advice, this is just an open-source tech project.</small>
    </div>

    <!-- INCLUDE HEAD.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <div>
      
      <section id="hero-cover">
        <h1>A free solution for your website's privacy protection</h1>
        <p>Privacy Protection is not just for legal compliance, it's about caring for your users.</p>
        <button><i class="fa-solid fa-book"></i> Documentation</button>
        <button><i class="fa-solid fa-cloud-arrow-down"></i> Download</button>
      </section>

      <section id="documentation" class="container">
        <h2>Documentation</h2>
        <h3>Intro</h3>
        <p>[TBD]</p>
        <h3>Google Tag Manager</h3>
        <ul>
          <li><strong>#01 Make sure you have installed GTM on all the pages of your website</strong></li>
        </ul>
        <p>We're gonna be using Google Tag Manager to add our code and settings. If you're not familiar with Google Tag Manager, don't worry. This tutorial will cover what you need to know.</p>
        <p>If you haven't used Google Tag Manager before, then use your Google account to sign in and create a Container where we'll be adding all our code and specifications for your website, and add the corresponding code to call the Container in your head and body elements of all the pages you want to work with Poly Cookies.</p>
        <p>If you already have a Container embedded in your website, then you can start with the following steps.</p>
        <ul>
          <li><strong>#02 Add the Consent Mode tag to GTM</strong></li>
        </ul>
        <p>The Vendor Agnostic Google Consent Template will allow us to define and change the consent preferences of the user in GTM.</p>
        <p>Download the ZIP file of the Google Consent Template.</p>
        <p>Once you're in the Workspace of your desired Container, <strong>we'll go to the "Templates" page</strong> and <strong>click on the "New" button</strong> in the Tag Templates section.</p>
        <p>Next, <strong>click on the three dots icon on the upper-right corner</strong> of the screen and <strong>click on "Import"</strong> on the dropdown menu.</p>
        <p><strong>Select the template file</strong> included in the Google Consent Template ZIP.</p>
        <p>The rest of the information about the Tag will fill out automatically. Just submit it.</p>
        <ul>
          <li><strong>#03 Create a Default Consent state</strong></li>
        </ul>
        <p>Once you're in the Workspace of your desired Container, we'll <strong>go to "Tags"</strong> and <strong>click on the "New" button</strong> in the upper right corner.</p>
        <p>We'll <strong>name it "Default Consent"</strong> so that Google knows that we're not having intrusive behavior with the user's browser once he or she lands on our webpage.</p>
        <p>In the Tag Type, we'll <strong>select the "Consent Mode" tag</strong> we've uploaded with the tempalte file.</p>
        <p>On the Default Settings, we'll add a row to specify that all browser privacy permissions are denied, except  for any related to the <strong>Functionality Storage, which should be allowed.</strong></p>
        <p>As a <strong>trigger for the Tag will set "Consent Initialization - All Pages",</strong> which is by default the first event that fires in GTM.</p>
        <ul>
          <li><strong>#04 Create a new Consent Accepted variable</strong></li>
        </ul>
        <p></p>
        <h3>Javascript</h3>
        <h3>CSS</h3>
        <h3>Privacy Policy</h3>
        <h3>License</h3>
        <h3>Authors</h3>
      </section>

      <hr>

      <section id="download" class="container">
        <h2>Download</h2>
        <a href=""><button class="secondary-button donation-button"><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i> Send a Donation</button></a>
        <button><i class="fa-solid fa-cloud-arrow-down"></i> Download Files</button>

      </section>

      </div>
      <div style="display: none;">

      <section>
        <h2>Watch the tutorial</h2>
        <img src="#">
      </section>

      

      <section>
        <h2>Download</h2>
      </section>
    </div>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/footer.php';?>
    <!-- INCLUDE HEAD.PHP end -->

  </body>
</html>
