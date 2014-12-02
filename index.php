<?php # index.php
require_once('includes/config.inc');
require_once('includes/header.html');
?>

<div class="row" id="head">
  <div class="large-12 columns text-center">
    <h2 class="mmargin mmargin-top">Hello World</h2>
  </div>
  <div class="large-12 columns text-center mmargin">
    <img src="/img/world_map.png" id="map" alt="map">
  </div>
</div>

<div class="row inner pos-rel">
  <div class="large-12 columns text-center mmargin mmargin-top">
    <h3>Thanks for visiting.</h3>
    <h4 class="slim secondary">This is a little corner of the internet that I made.</h4>
  </div>
  <div class="down-triangle"></div>
</div>


<div class="row" id="about">
  <div class="large-12 columns text-center mmargin mmargin-top">
    <h2>About Me</h2>
  </div>
  <div class="medium-5 columns mmargin">
    <h3>I'm Solomon.</h3>
    <p>I make things out of bits and atoms. Both have their own unique properties and challenges.</p>
  </div>
  <div class="medium-7 columns text-center mmargin">
    <img src="/img/devices-450.png" id="map" alt="">
  </div>
</div>

<div class="row inner pos-rel">
  <div class="large-12 columns text-center mmargin mmargin-top">
    <h3>Find me online.</h3>
    <h4 class="slim secondary">Here are a few sites.</h4>
  </div>
  <div class="down-triangle"></div>
</div>

<div class="row" id="social">
  <div class="large-12 columns text-center mmargin mmargin-top">
      <h2>Social Media</h2>
  </div>
  <div class="small-4 columns trans hoverup text-center mmargin">
    <div class="text-center">
      <a href="http://facebook.com/solomonliou">
        <img src="/img/facebook.png" target="_blank" alt="facebook">
      </a>
    </div>
  </div>
  <div class="small-4 columns trans hoverup text-center mmargin">
    <div class="text-center">
      <a href="http://twitter.com/solomonliou">
        <img src="/img/twitter.png" target="_blank" alt="twitter">
      </a>
    </div>
  </div>
  <div class="small-4 columns trans hoverup text-center mmargin">
    <div class="text-center">
      <a href="http://linkedin.com/in/solomonliou">
        <img src="/img/linkedin.png" target="_blank" alt="linkedin">
      </a>
    </div>
  </div>
</div>

<div class="row inner pos-rel">
  <div class="large-12 columns text-center mmargin mmargin-top">
    <h3>Hope you enjoyed your visit.</h3>
    <h4 class="slim secondary">If you like, feel free to say hi.</h4>
  </div>
  <div class="down-triangle"></div>
</div>

<div class="row" id="contact">
    <div class="large-12 columns text-center mmargin mmargin-top">
      <h2>Contact Me</h2>
    </div>
    <div class="medium-12 columns">
      <form id="myForm" data-abide="ajax">
      <div class="contactform medium-centered columns">
          <div class="medium-7 medium-centered columns name-field">
            <input class="trans" id="name" placeholder="Name" type="text" required>
            <small class="error">Name is required</small>
          </div>
          <div class="medium-7 medium-centered columns">
            <input class="trans" id="email" placeholder="Email" type="email" required>
            <small class="error">Email is required</small>
          </div>
          <div class="medium-7 medium-centered columns">
            <textarea class="trans" id="message" placeholder="Message" rows="4" required ></textarea>
            <small class="error">Message is required</small>
          </div>
          <div class="medium-12 medium-centered columns text-center bmargin">
            <button type="submit">Submit</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>

<?php
include("includes/footer.html"); 
?>


