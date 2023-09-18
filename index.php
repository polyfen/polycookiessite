<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Poly Cookies | Free GDPR Compliance Template</title>

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
        <h1>A free solution to cookies consent</h1>
        <p>Implementing Privacy Protection on your website is not just for legal compliance, it's about caring for your users.</p>
        <a href="https://github.com/thepolygroup/polycookiesapp/archive/refs/heads/main.zip" target="_blank"><button><i class="fa-solid fa-cloud-arrow-down"></i> Download</button></a>
        <a href="#tutorial" style="display: none;"><button><i class="fa-solid fa-book"></i> Watch Turorial</button></a>
      </section>

      <section id="tutorial" class="container">
         <h2>Watch Tutorial</h2>
         <iframe width="100%" height="450px" src="https://www.youtube-nocookie.com/embed/QSKiPr_VgPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <hr style="margin-top: 100px;margin-bottom:80px">
      </section>

      <section id="documentation" class="container">
        <h2>Installation Guide</h2>
        <div class="tasks">
          <input type="checkbox" id="task-no-1" name="task-no-1">
          <label for="task-no-1">1. Download the Poly Cookies source files</label>
        </div>
        <p>First, download the Poly Cookies source files which include the HTML code will be adding to Google Tag Manager and the CSS file you'll be adding to your website.</p>
        <p>Download the ZIP file from the following link: <a href="https://github.com/thepolygroup/polycookiesapp/archive/refs/heads/main.zip" target="_blank">https://github.com/thepolygroup/polycookiesapp/archive/refs/heads/main.zip</a></p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-2" name="task-no-2">
          <label for="task-no-2">2. Make sure you have installed GTM in all the pages of your website</label>
        </div>
        <p>We're gonna be using Google Tag Manager to add our code and settings. If you're not familiar with Google Tag Manager, don't worry. This tutorial will cover what you need to know.</p>
        <p>If you haven't used Google Tag Manager before, then use your Google account to sign in and create a Container where we'll be adding all our code and specifications for your website, and add the corresponding code to call the Container in your head and body elements of all the pages you want to work with Poly Cookies.</p>
        <p>If you already have a Container embedded in your website, then you can start with the following steps.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-3" name="task-no-3">
          <label for="task-no-3">3. Add the Consent Mode tag to GTM</label>
        </div>
        <p>The <a href="https://github.com/googleanalytics/gtm-consent-mode-examples" target="_blank">Vendor Agnostic Google Consent Template</a> will allow us to define and change the consent preferences of the user in GTM.</p>
        <p>Download the ZIP file of the Google Consent Template: <a href="https://github.com/googleanalytics/gtm-consent-mode-examples/archive/refs/heads/main.zip" target="_blank">https://github.com/googleanalytics/gtm-consent-mode-examples/archive/refs/heads/main.zip</a></p>
        <p>Once you're in the Workspace of your desired Container, we'll go to the "Templates" page and click on the "New" button in the Tag Templates section.</p>
        <p>Next, click on the three dots icon on the upper-right corner of the screen and click on "Import" on the dropdown menu.</p>
        <p>Select the template file included in the Google Consent Template ZIP.</p>
        <p>The rest of the information about the Tag will fill out automatically. Just submit it.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-4" name="task-no-4">
          <label for="task-no-4">4. Create a Default Consent state</label>
        </div>
        <p>Once you're in the Workspace of your desired Container, we'll go to "Tags" and click on the "New" button in the upper right corner.</p>
        <p>We'll name it "Default Consent" so that Google knows that we're not having intrusive behavior with the user's browser once he or she lands on our webpage.</p>
        <p>In the Tag Type, we'll select the "Consent Mode" tag we've uploaded with the template file.</p>
        <p>On the Default Settings, we'll add a row to specify that all browser privacy permissions are denied, except  for any related to the Functionality Storage, which should be allowed.</p>
        <p>As a trigger for the Tag will set "Consent Initialization - All Pages", which is by default the first event that fires in GTM.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-5" name="task-no-5">
          <label for="task-no-5">5. Create a new Consent Accepted variable</label>
        </div>
        <p>On the Variables page of your GTM, look for the "User-Defined Variables" section and click the "New" button.</p>
        <p>Name the new variable "consentAccepted" and set the variable type as a "1st Party Cookie".</p>
        <p>We'll set the Cookie Name to "consentAccepted" and click on "Save".</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-6" name="task-no-6">
          <label for="task-no-6">6. Add the Cookies Modal as a custom HTML Tag</label>
        </div>
        <p>You can either create a new HTML, or you can use the template we've provided for you in the file <strong>cookies-modal.html</strong>:</p>
        <pre>
          <code>
&lt;div id="cookies-modal-container">
  &lt;div id="cookies-modal">
    &lt;div id="cookies-title">
      🍪 Improve your experience by accepting our &lt;a href="#YOUR-PRIVACY-POLICY-PAGE" target="_blank">privacy policy&lt;/a>.
    &lt;/div>
    &lt;div id="cookies-modal-buttons">
      &lt;button id="accept-cookies-button" onclick="document.getElementById('cookies-modal').className='cookies-d-none';">Accept&lt;/button> &lt;button onclick="document.getElementById('cookies-modal').className='cookies-d-none';">Reject&lt;/button>
    &lt;/div>
  &lt;/div>
&lt;/div>
          </code>
        </pre>
        <p>Just replace the link "#YOUR-PRIVACY-POLICY-PAGE" with your privacy policy's page URL. If you don't have a privacy's policy page yet, you can set one up for free using a privacy policy generator, like <a href="https://getterms.io" target="_blank">getterms.io</a>. We have no affiliation with GetTerms and you can use any other privacy policy generator or create a custom one consulting a legal expert.</p>
        <p>We'll set up "All pages" as the trigger.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-7" name="task-no-7">
          <label for="task-no-7">7. Create a Trigger based on clicking the Accept button</label>
        </div>
        <p>In the Variables section of Google Tag Manager, we'll click on the "configure" button to set up a new Built-In Variable, and we'll make sure that "Click ID" is checked.</p>
        <p>We'll go to the Triggers page and create a new one named "Clicked on Accept Cookies".</p>
        <p>Select the "Click - All Elements" trigger type.</p>
        <p>Change the option of "Trigger fires on" to "Some Clicks".</p>
        <p>We'll set it as "Click ID", "equals", and "accept-cookies-button".</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-8" name="task-no-8">
          <label for="task-no-8">8. Create a new tag to Change the Consent Permissions</label>
        </div>
        <p>On the Tags page, we'll create a new one with a type of "Consent Mode - Vendor Agnostic Google Template".</p>
        <p>The consent command should be "Update Command", and we'll set "Granted" in all storage settings.</p>
        <p>As the trigger, We'll select the new "Clicked on Accept Cookies" we created and save.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-9" name="task-no-9">
          <label for="task-no-9">9. Save the consent acceptance with a cookie</label>
        </div>
        <p>Create a new custom HTML tag named "Save Consent 1st party Cookie" with the code included in the <strong>cookies-consent.js</strong> file:</p>
        <pre>
          <code>
&lt;script>
  var date = new Date();
  date.setTime(date.getTime() + (90 * 24 * 60 * 60 * 1000));
  var expires = "expires=" + date.toUTCString();
  document.cookie = 'consentAccepted=true; ' + expires + '; path=/';
&lt;/script>
          </code>
        </pre>
        <p>Make sure you check the box with the label "Support document.write".</p>
        <p>And we'll select "Clicked on Accept Cookies" as the trigger and save the tag.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-10" name="task-no-10">
          <label for="task-no-10">10. Create new Trigger for Page Views after accepted consent</label>
        </div>
        <p>We'll create a new Trigger and name it "Page view - previously accepted cookies".</p>
        <p>Set the trigger configuration as "Page View".</p>
        <p>Choose the firing option "Some Page Views".</p>
        <p>Set the conditions for firing on "consentAccepted", "equals", and type "true".</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-11" name="task-no-11">
          <label for="task-no-11">11. Hide the Cookies modal on new page views after accepted consent</label>
        </div>
        <p>On the Tags page, we'll edit the "Cookies Modal" custom HTML tag triggers and add an exception.</p>
        <p>We'll select "Page view - previously accepted cookies" as an exception and save.</p>
        <p>Once we submit our Google Tag Manager container the functionality of our cookies consent modal should be working.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-12" name="task-no-12">
          <label for="task-no-12">12. Add CSS style to the Cookies Modal</label>
        </div>
          <p>If you're using a platform like Wordpress, Squarespace, or Wix, it might not be easy for you to upload the custom CSS file and the images. In that case copy the styles from the file <strong>cookies-for-cms.html</strong> and paste it in the "Cookies Modal" tag from GTM above the existing code.</p>
          <p>If you're not using a platform like Wordpres, Squarespace or Wix, you can continue by adding the <strong>cookies.css</strong> file from Poly Cookies to your website's &lt;head>.</p>
          <pre>
            <code>
&lt;link rel="stylesheet" href="cookies.css" type="text/css">
            </code>
          </pre>
          <p>Make sure all files (like the thumbs-up icons) are in the correct directory path.</p>
          <p>By default, the cookies modal features a light theme. However, we can change it to a dark theme by adding <code>class="dark-theme"</code> to <code>&lt;div id="cookies-modal"></code> in the Cookies Modal HTML tag from GTM.</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-13" name="task-no-13">
          <label for="task-no-13">13. Set all tracking tags to trigger after accepted consent</label>
        </div>
        <p>Any tags that you want to you on your website to track your users activity should be set with the two triggers "Clicked on Accept Cookies" and "Page View - previously accepted cookies".</p>
        <hr style="margin: 60px 60px;">
        <div class="tasks">
          <input type="checkbox" id="task-no-14" name="task-no-14">
          <label for="task-no-14">14. Test functionality</label>
        </div>
        <p>Clear your server and browser caché and open your website on a new tab.</p>
        <p>Right-click anywhere on your webpage and click "Inspect Item" to open up the DevTools windown.</p>
        <p>On the "Application" tab, navigate to the Storage›Cookies section of the sidebar, and click on your website's URL.</p>
        <p>There should be no cookies saved on your browser by default.</p>
        <p>Next, Click on the "Reject" button of the cookies modal. The modal should dissappear without saving any cookies.</p>
        <p>Refresh the website, the cookies modal should re-appear. This time, click on the "Accept" button.</p>
        <p>Lastly, go back to the DevTools "Application" tab and make sure there is a new cookie being registered from your website named "consentAccepted" with a value of "True" and an expiration date set 90 days from today's date.</p>
        <p>All other tracking cookies you might be using, like "_ga" from Google Analytics, should also be appearing on the DevTools window.</p>
      </section>

      <hr>

      <section id="support" class="container">
        <h2>Support Privacy Protection</h2>
        <a href="https://donate.stripe.com/9AQ5lgeoDef2b1CdQQ" target="_blank"><button class="secondary-button donation-button"><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i> Send a Donation</button></a>

        <div style="display:block">
        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
        </div>

      </section>

      <div id="contact">
        <a href="mailto:contacto@polycookies.com">contact@polycookies.com</a>
      </div>

      </div>
      
      <div style="display: none;">
      <section>
        <h2>Watch the tutorial</h2>
        <img src="#">
      </section>
      </div>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/footer.php';?>
    <!-- INCLUDE HEAD.PHP end -->

  </body>
</html>
