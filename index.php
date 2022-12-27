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
        <h1>A free solution to privacy protection</h1>
        <p>Implementing Privacy Protection on your website is not just for legal compliance, it's about caring for your users.</p>
        <button><i class="fa-solid fa-book"></i> Documentation</button>
        <button><i class="fa-solid fa-cloud-arrow-down"></i> Download</button>
      </section>

      <section id="documentation" class="container">
        <h2>Documentation</h2>
        <div class="tasks">
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">1. Make sure you have installed GTM in all the pages of your website</label>
        </div>
        </ul>
        <p>We're gonna be using Google Tag Manager to add our code and settings. If you're not familiar with Google Tag Manager, don't worry. This tutorial will cover what you need to know.</p>
        <p>If you haven't used Google Tag Manager before, then use your Google account to sign in and create a Container where we'll be adding all our code and specifications for your website, and add the corresponding code to call the Container in your head and body elements of all the pages you want to work with Poly Cookies.</p>
        <p>If you already have a Container embedded in your website, then you can start with the following steps.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">2. Add the Consent Mode tag to GTM</label>
        </div>
        <p>The Vendor Agnostic Google Consent Template will allow us to define and change the consent preferences of the user in GTM.</p>
        <p>Download the ZIP file of the Google Consent Template.</p>
        <p>Once you're in the Workspace of your desired Container, <strong>we'll go to the "Templates" page</strong> and <strong>click on the "New" button</strong> in the Tag Templates section.</p>
        <p>Next, <strong>click on the three dots icon on the upper-right corner</strong> of the screen and <strong>click on "Import"</strong> on the dropdown menu.</p>
        <p><strong>Select the template file</strong> included in the Google Consent Template ZIP.</p>
        <p>The rest of the information about the Tag will fill out automatically. Just submit it.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">3. Create a Default Consent state</label>
        </div>
        <p>Once you're in the Workspace of your desired Container, we'll <strong>go to "Tags"</strong> and <strong>click on the "New" button</strong> in the upper right corner.</p>
        <p>We'll <strong>name it "Default Consent"</strong> so that Google knows that we're not having intrusive behavior with the user's browser once he or she lands on our webpage.</p>
        <p>In the Tag Type, we'll <strong>select the "Consent Mode" tag</strong> we've uploaded with the tempalte file.</p>
        <p>On the Default Settings, we'll add a row to specify that all browser privacy permissions are denied, except  for any related to the <strong>Functionality Storage, which should be allowed.</strong></p>
        <p>As a <strong>trigger for the Tag will set "Consent Initialization - All Pages",</strong> which is by default the first event that fires in GTM.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">4. Create a new Consent Accepted variable</label>
        </div>
        <p>On the Variables page of your GTM, look for the <strong>"User-Defined Variables"</strong> section and <strong>click the "New" button.</strong></p>
        <p><strong>Name the new variable "consentAccepted"</strong> and set the variable type as a <strong>"1st Party Cookie"</strong>.</p>
        <p>We'll <strong>set the Cookie Name to "consentAccepted"</strong> and <strong>click on "Save".</strong></p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">5. Add the Cookies Modal as an HTML Tag</label>
        </div>
        <p>You can either create a new HTML, or you can use the template we've provided for you:</p>
        <pre><code>
&lt;div id="cookies-modal-container">
  &lt;div id="cookies-modal">
    &lt;div id="cookies-title">
      🍪 Improve your experience accepting our &lt;a href="#YOUR-PRIVACY-POLICY-PAGE" target="_blank">privacy policy&lt;/a>.
    &lt;/div>
    &lt;div id="cookies-modal-buttons">
      &lt;button id="accept-button" onclick="document.getElementById('cookies-modal').className='cookies-d-none';">Accept&lt;/button> &lt;button onclick="document.getElementById('cookies-modal').className='cookies-d-none';">Reject&lt;/button>
    &lt;/div>
  &lt;/div>
&lt;/div>
    </code></pre>
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
