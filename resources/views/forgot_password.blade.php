@extends('layout.authmaster')

@section('content')
  <div>
  <div id="wrapper">
    <header id="main-header" class="clearfix">
      <img class="header-top" src="/assets/img/pages/home2/color.jpg?1570011240" alt="">    <div class="clearfix">
        <div id="logo-container">
          <a href="/"><img src="/assets/img/logo_main_2.png?1570010641" alt=""></a>            <span id="beta">BETA</span>
        </div>
      </div>
    </header>


    <nav id="main-nav" class="clearfix">
      <div>

        <div id="login-status">
          <span><a href="/pages/home">Sign up</a> | <a href="/users/login">Login</a></span>
          <div id="logged-in-user-notification"></div>
          <div id="chat-base-url">/</div>
        </div>
      </div>
    </nav>
    <div id="center">
      <div id="content" class="narrow">
        <div id="center-form-container" class="clearfix">
          <h2><span>Forgot Password</span></h2>
          <p>Give us your email <span>for us to send you the reset email</span></p>
          <div class="content-box">
            <form action="/users/forgot_password" accept-charset="utf-8" method="post">
              <p>
                <label for="email">Your email</label>
                <input name="email" value="" type="text" id="form_email">                    <span class="error"></span>
              </p>

              <p class="submit with-margin">
                <input class="button rounded-corners" name="" value="Submit" type="submit" id="form_">                    Not yet registered, <a href="/users/sign_up">Sign Up!</a>                </p>

            </form>            </div>
        </div>

      </div>
    </div>            <footer id="footer" class="clearfix">
      <div id="footer-content" class="clearfix">
        <!--        <div id="footer-header"  class="clearfix">-->
        <!--            <p class="about-us"><a target="blank" href="http://whereweallmeet.com/blog/about/">About Us</a></p>-->
        <!--            <p class="links">Links</p>-->
        <!--            <p class="latest-blog">Latest from Blog</p>-->
        <!--        </div>-->
        <div id="footer-center" class="clearfix">
          <div id="about-us-container" class="clearfix">
            <p class="about-us-header"><a target="blank" href="http://whereweallmeet.com/blog/about/">About Us</a></p>
            <p class="about-us">
              Where We All Meet was created as a social place to meet people and invite friends to find local events and places for exciting dates. we also provide live dating agents to assist our members in finding that perfect match
            </p>
          </div>
          <div id="links-target-container" class="clearfix">
            <p class="links-header">Links</p>
            <p class="links">
              <a target="blank" href="http://whereweallmeet.com/blog/faq/">FAQ</a>
              <a target="blank" href="http://whereweallmeet.com/blog/jobs/">Jobs</a>
              <a target="blank" href="http://whereweallmeet.com/blog/affiliates/">Affiliates</a>
              <a target="blank" href="http://whereweallmeet.com/blog/terms/">Terms of Service</a>
              <a target="blank" href="http://whereweallmeet.com/blog/privacy/">Privacy Policy</a>
              <a target="blank" href="http://whereweallmeet.com/blog/">Blog</a>
            </p>
          </div>
          <div id="blog-posts-container" class="clearfix">
            <p class="latest-blog-header">Latest from Blog</p>
            <ul id="footer-posts"></ul>
            <script type="text/javascript">
              $(document).ready(function()
              {
                $.getJSON("http://whereweallmeet.com/blog/wp-json/posts?filter[orderby]=date&filter[posts_per_page]=3", function(a) {
                  for (var i=0;i<a.length;i++)
                  {
                    $("#footer-posts").append("<li><a target=\"blank\" href='"+a[i].link +"' >" + a[i].title + "</a></li>");
                  }
                });
              });
            </script>
          </div>
        </div>
      </div>
      <div id="social-links-container" class="clearfix">
        <a href="http://twitter.com"><img src="/assets/img/twitter_icon_color2.png?1570010697" alt=""></a>        <a href="http://facebook.com"><img src="/assets/img/facebook_icon_color2.png?1570010620" alt=""></a>    </div>
      <div id="footer-bottom" class="clearfix">
        <div id="footer-bottom-center">
          <p class="left">Copyright @ 2012 Where We All Meet</p>
          <p class="right">All Rights Reserved: WhereWellAllMeet.com</p>
        </div>
        <img class="footer-bottom" src="/assets/img/pages/home2/color.jpg?1570011240" alt="">    </div>
    </footer>

    <div id="login" class="dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>Login</h2>
      </div>
      <div class="dialog-content">
        <form action="/users/login" class="clearfix" accept-charset="utf-8" method="post">        <p class="clearfix">
            <label>Username:</label>
            <input type="text" name="username">
          </p>
          <p class="clearfix">
            <label>Password:</label>
            <input type="password" name="password"><br>
            <span>(6-16 characters MUST include numbers no spaces)</span>
          </p>
          <p class="clearfix">
            <span>Forgot Your <a href="/users/forgot_password">Password</a>?</span>
          </p>
          <p class="submit">
            <input type="submit" name="btnLogin" value="login">
          </p>
        </form>
      </div>
    </div>

    <div id="interaction-icons-description">
      <p></p>
    </div>

    <div id="message-confirmation-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Send a Message</h2>
      </div>
      <div class="dialog-content clearfix">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/messages_1.png?1570010650" alt="">            <p class="username">You are sending a Message to <span></span>!</p>
          <p>Do you want to send now?</p>
          <a class="button message yes-button confirm-send-message" href="#" data-dialog="send-message-dialog" data-from-member-id="" data-to-member-id="">Yes</a>
          <a class="button no-button" href="#">No</a>
        </div>
      </div>
    </div>

    <div id="chat-confirmation-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>New Chat Request</h2>
      </div>
      <div class="dialog-content">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/chat_03.png?1570010605" alt="">            <p class="username">You are sending a Chat Request to <span></span>!</p>
          <p>Do you want to send now?</p>
          <a class="button chat yes-button confirm-send-chat" href="#" data-dialog="chat-request-sent-dialog" data-username="">Yes</a>
          <a class="button no-button" href="#">No</a>
        </div>
      </div>
    </div>

    <div id="book-me-confirmation-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Book This Agent</h2>
      </div>
      <div class="dialog-content clearfix">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/agent_book.png?1570010597" alt="">            <p class="username">You are attempting to book <span></span> dating agent!</p>
          <p>Do you want book this agent now?</p>
          <a class="button book-me yes-button confirm-send-book-me" href="#" data-action="/agent/book_me" data-dialog="book-me-sent-dialog" data-from-member-id="" data-to-member-id="">Yes</a>
          <a class="button no-button" href="#">No</a>
        </div>
      </div>
    </div>

    <div id="hello-confirmation-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Send a Hello</h2>
      </div>
      <div class="dialog-content">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/hello_01.png?1570010628" alt="">            <p class="username">You are sending a Hello to <span></span>!</p>
          <p>Do you want to send now?</p>
          <a class="button hello yes-button confirm-send-hello" href="#" data-dialog="send-hello-dialog" data-from-member-id="" data-to-member-id="">Yes</a>
          <a class="button no-button" href="#">No</a>
        </div>
      </div>
    </div>

    <div id="favorite-confirmation-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Save as Favorite</h2>
      </div>
      <div class="dialog-content">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/favorite.png?1570010621" alt="">            <p class="username">You are saving <span></span> profile as Favorite!</p>
          <p>Do you want to save now?</p>
          <a class="button favorite yes-button confirm-save-favorite" href="#" data-dialog="save-favorite-dialog" data-from-member-id="" data-to-member-id="">Yes</a>
          <a class="button no-button" href="#">No</a>
        </div>
      </div>
    </div>

    <div id="send-message-dialog" class="public-profile-dialog dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>Send Message</h2>
      </div>
      <div class="dialog-content">
        <form id="send-message-form" action="/message/create_ajax" class="clearfix" accept-charset="utf-8" method="post">        <input name="from_member_id" value="0" type="hidden" id="form_from_member_id">        <input name="to_member_id" value="0" type="hidden" id="form_to_member_id">        <input name="message_status" value="unread" type="hidden" id="form_message_status">        <p class="clearfix">
            <label>To:</label><span class="readonly-text"></span>
          </p>
          <p class="clearfix">
            <label>Subject:</label>
            <input type="text" name="subject"><br>
          </p>
          <p class="clearfix">
            <label>Message:</label>
            <textarea name="body"></textarea><br>
          </p>
          <p class="submit">
            <input type="submit" name="#" value="Send">
          </p>
        </form>
      </div>
    </div>

    <div id="send-hello-dialog" class="public-profile-dialog dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>Send Hello</h2>
      </div>
      <div class="dialog-content">
        <form id="send-hello-form" action="/hello/send" class="clearfix" accept-charset="utf-8" method="post">        <input name="from_member_id" value="0" type="hidden" id="form_from_member_id">        <input name="to_member_id" value="0" type="hidden" id="form_to_member_id">        <div id="send-hello-content" class="clearfix">
            <p>Send Hello to <span class="readonly-text"></span></p>
            <p class="submit">
              <input type="submit" name="#" value="Send Hello">
            </p>
          </div>
        </form>        <p class="message">A Hello is already sent for <span class="readonly-text"></span>.</p>
      </div>
    </div>

    <div id="save-favorite-dialog" class="public-profile-dialog dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>Save as Favorite</h2>
      </div>
      <div class="dialog-content">
        <form id="save-favorite-form" action="/favorite/save" class="clearfix" accept-charset="utf-8" method="post">            <input name="member_id" value="0" type="hidden" id="form_member_id">            <input name="favorite_member_id" value="0" type="hidden" id="form_favorite_member_id">            <div id="save-favorite-content" class="clearfix">
            <p>Save <span class="readonly-text"></span> as your favorite</p>
            <p class="submit">
              <input type="submit" name="#" value="Save as Favorite">
            </p>
          </div>
        </form>        <p class="message"><span class="readonly-text"></span> is already saved as your Favorite.</p>
      </div>
    </div>

    <div id="notification-container" class="alert alert-success rounded-corners" style="top: 20px; left: 429.5px;">
      <i class="close-dialog fa fa-times-circle-o close"></i>
      <h4></h4>
      <p></p>
    </div>

    <div id="chat-request-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>New Chat Request</h2>
      </div>
      <div class="dialog-content">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/chat_03.png?1570010605" alt="">            <p class="username"><span class="sender"></span> has sent you a Chat Request.<span class="subject"></span></p>
          <p>Do you accept this invite?</p>
          <a class="button chat confirm-receive-chat" id="accept-chat" data-status="accept" href="#">Accept</a>
          <a class="button" id="decline-chat" data-status="decline" href="#">Decline</a>
        </div>
      </div>
    </div>

    <div id="chat-request-sent-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Chat Request Sent</h2>
      </div>
      <div class="dialog-content">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/chat_03.png?1570010605" alt="">            <p class="username">You have sent <span></span> a chat request.</p>
          <a class="button no-button" href="#">OK</a>
        </div>
      </div>
    </div>

    <div id="chat-request-response-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Chat Request Rejected</h2>
      </div>
      <div class="dialog-content">
        <img src="" class="dialog-logo">
        <div class="right-content">
          <img src="/assets/img/chat_03.png?1570010605" alt="">            <p class="username"><span></span> has declined your chat request.</p>
          <a class="button no-button" href="#">OK</a>
        </div>
      </div>
    </div>

    <div id="invite-a-friend-dialog" class="dialog confirmation-dialog">
      <div class="dialog-header">
        <img src="/assets/img/pages/home2/mini.png?1570011323" alt="">        <h2>Invite Your Friend to Join for Free</h2>
      </div>
      <div class="dialog-content">
        <div id="dialog-content-header">
          <p>
            Enter the email address of the friend/friends that you want to join the new WhereWeAllMeet.com platform. It's FREE to join so send an invitation
            to your favorite group of people and let the Night Life, Travel &amp; Adventure begin.
          </p>
        </div>
        <form id="invite-a-friend-form" action="/profile/invite_a_friend">
          <div class="input-container">
            <p>
              <input id="email" type="text" name="email" placeholder="Email Address">
            </p>
            <p>
              <textarea id="message" name="message" placeholder="Write a Message..."></textarea>
            </p>
          </div>
          <p class="invite-button clearfix">
            <input type="submit" class="button" name="#" value="Send Invite">
          </p>
        </form>
      </div>
    </div>

    <div id="privacy-policy-dialog" class="public-profile-dialog dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>WhereWeAllMeet.com Privacy Policy</h2>
      </div>
      <div class="dialog-content">
        <p><em>Last Updated: August 1, 2014</em></p>
        <p>  WhereWeAllMeet.com (the "<u>Site</u>"),  operated solely by The Man You Want, LLC. ("<u>we</u>" or "<u>us</u>"),  respects the privacy of our users and has developed this privacy policy (the  "<u>Privacy Policy</u>") to articulate our commitment to protecting  your personal privacy.<br>
          The Privacy Policy is intended to describe for  you, as an individual who is a user of the Site or of the services offered on  the Site (collectively with the Site, the "Services"), the information  we collect, how that information may be used, with whom it may be shared, and  your choices about such uses and disclosures.<br>
          We encourage you to read this Privacy Policy  carefully when using the Services. By accessing the Services, you acknowledge  and agree that you have read, fully accept, and will abide by this Privacy  Policy.</p>
        <p><strong>Information we collect about you.</strong><br>
          In general, we don't collect personally  identifiable information about you. We may collect personal information that  can identify you in combination with other information, such as your name and  e- mail address, and generally collect other information that does not identify  you, like interesting places you've visited.</p>
        <p><strong>Information you provide. </strong>We may collect and store any information that you enter on the Site or  provide to us in some other manner, such as through using some of our Services.</p>
        <p><strong>Private personally identifiable information</strong>. While we don't, at this time, ask for very many items that alone  would be considered personally identifiable information, the information we  collect may include items like your name, address, e-mail address and telephone  number.</p>
        <p><strong>Public preference information and content</strong>. When you create an account and join the Site (becoming a  "Member") you create a profile containing non-identifiable  information, such descriptive information about you including, for example,  your height. You can also upload photographs of yourself to your profile. The  Services also allow you to propose dates and share other information publicly.  To the extent you provide any information in those sections of the Services,  that information is entirely public, could be indexed by Internet search  engines and may be used by us for any purpose. As such, you should exercise  caution when revealing information in public aspects of the Services.</p>
        <p>  <strong>Financial information</strong>. We do not currently collect financial information, such as your  payment method (valid credit card number, type, expiration date or other  financial information); that information is collected and stored by our third  party payment processing company (the "Payment Processor"), and use  and storage of that information is governed by the Payment Processor's  applicable terms of service and privacy policy.</p>
        <p><strong>Demographic and usage information</strong>. We may collect and store demographic information, such as your  gender, age, information about your interests and activities and information  related to your use of the Services, such as dates you have responded to and  profiles you have viewed. This information is not personally identifiable by  itself, but may become so in combination with other information.</p>
        <p><strong>Location information</strong>. To the extent you voluntarily opt to use any of our Services that  that are based on the location of Members and which may report on those  Members' current locations (the "Location-Based Services"), we may  collect and store information about your location at the time you use those  Location-Based Services. This information can come from a variety of sources  depending on the client you use to access the Services; for example, a mobile  phone may report its GPS location at the time the Location-Based Services are  used.</p>
        <p><strong>Information from other sources. </strong>We may also periodically obtain both personal and non- personal  information about you from business partners, contractors and other third  parties, including third-party platforms (“Third Party Platforms”), and add it  to our account information or other information we have collected (for example,  we may collect information about you from our Payment Processor in order to  continue your account subscription). Examples of information that we may  receive include: updated address information, purchase history and additional  demographic information.</p>
        <p><strong>Information about others. </strong>We may also collect and store personal information about other people  that you provide to us, such as their name, address and e-mail address. If you  use the Services to send others (friends, relatives, colleagues, etc.) a gift,  we may store your personal information, and the personal information of each  such recipient in order to process those requests or facilitate future  activities.</p>
        <p><strong>Information collected using cookies and other  technologies</strong>. We use various technologies to collect  information from your computer and about your activities on the Services.<strong></strong></p>
        <p><strong>Information collected automatically. </strong>We automatically collect information from your browser when you access  the Services. This information includes your IP address, your browser type and  language, access times, the content of any undeleted cookies that your browser  previously accepted from us (see "Cookies" below), and the referring  website address.</p>
        <p><strong>Cookies. </strong>When you  access the Services, we may assign your computer one or more cookies, to  facilitate access to the Services and to personalize your experience. Through  the use of cookies, we also may automatically collect information about your  activity related to the Services, such as the web pages you visit, the links  you click, and the searches you conduct. Most browsers automatically accept  cookies, but you can usually modify your browser setting to decline cookies. If  you choose to decline cookies, please note that you may not be able to sign in  or use some of the interactive features offered by the Services.</p>
        <p><strong>Other Technologies. </strong>We may use standard Internet technology, such as web beacons and other  similar technologies, to track your use of the Services. We also may include  web beacons in advertisements or promotional or other e-mail messages or to  determine whether messages have been opened and acted upon. The information we  obtain in this manner enables us to customize the Services. It also may enable  us to deliver targeted advertisements and to measure the overall effectiveness  of our online advertising, content, programming or other activities.</p>
        <p><strong>Information collected by third parties</strong><br>
          We may allow third parties, including but not  limited to our authorized service providers, advertising companies, corporate  partners, and ad networks, to display advertisements through the Services.  These companies may use tracking technologies, such as cookies, to collect  information about users who view or interact with their advertisements. This  information may allow them to deliver targeted advertisements and gauge their  effectiveness.<br>
          When you use or connect to the Site or download a  Site mobile app by or through a Third Party Platform, such as Facebook or other  social networking site, you allow us to access and/or collect certain  information from your Third Party Platform profile/account (such as your  Facebook account) or via any cookies placed on your device by such Third Party  Platform as permitted by the terms of the agreement and your privacy settings  with the Third Party Platform. We will share such information with the Third  Party Platform for their use as permitted by the terms of the agreement and  your privacy setting with the Third Party Platform.<br>
          We will share some of the information we collect  from you upon install of the mobile app with vendors and other service  providers who are engaged by or working with us in connection with the  operation of the services we provide to you and/or for analytics purposes which  may require the reproduction and display of such information in an aggregated  and anonymized manner such that will not in any way identify you.</p>
        <p><strong>Where information we collect goes</strong><br>
          When you provide us with personal information,  that information may be sent to servers located in the United States and other  countries around the world.</p>
        <p><strong>How we use the information we collect</strong><br>
          Generally, we may use information that we collect  about you to: facilitate and enhance your use of the Services;<br>
          manage your account and provide you with customer  support;<br>
          perform research and analysis about your use of,  or interest in, the Site, Services, and content provided by us, or products, services  and content offered by others;<br>
          communicate with you by e-mail, postal mail,  telephone and/or mobile devices about products or services that may be of  interest to you either from us or other third parties;<br>
          develop and display content and advertising  tailored to your interests as reflected by your use of the Services;<br>
          verify your eligibility and deliver prizes in  connection with contests and sweepstakes; enforce our Terms of Use;<br>
          manage our business; and<br>
          perform functions as otherwise described to you  at the time of collection.</p>
        <p><strong>Financial information</strong>. As stated above, we do not currently collect financial information,  as that information is collected and stored by our Payment Processor. However,  we may from time to time request and receive some of your financial information  from our Payment Processor for the purposes of completing transactions you have  initiated through the Services, enrolling you in discount, rebate, and other  programs in which you elect to participate, protecting against or identify possible  fraudulent transactions, and otherwise as needed to manage our business.</p>
        <p><strong>With whom we share your information</strong><br>
          We want you to understand when and with whom we  may share personal or other information we have collected about you or your  activities while using our Services.</p>
        <p><strong>Public information</strong>. Any information (i) you place in your Member profile, such as your  username, any photographs you upload, and information under the  "Basics" and "About Me" sections; (ii) about dates you  propose; or (iii) otherwise posted by you to a public portion of the Services,  is completely public and could be indexed by Internet search engines. As such,  by providing us with that information, you acknowledge that you have no  reasonable expectation of privacy in it and that it may be used for any  purpose. As noted above, you should exercise due care in revealing information  through these public portions of the Services.</p>
        <p><strong>Other personal information</strong>. We do not share your personal information with others except as  indicated below or when we inform you and give you an opportunity to opt out of  having your personal information shared. We may share personal information  with:</p>
        <p><strong>Authorized agents and service providers: </strong>We may share your personal information, which may include your name  and contact information (including e-mail address) with our authorized agents  and service providers that perform certain services on our behalf. These  services may include maintaining our servers, fulfilling subscription requests,  providing customer service and marketing assistance, performing business and  sales analysis, supporting the functionality of the Services, providing payment  fulfillment and reconciliation services, and supporting rewards programs,  surveys and other features. These agents and service providers may have access  to personal information needed to perform their functions but are not permitted  to share or use such information for any other purposes.</p>
        <p><strong>Business partners: </strong>When you make purchases or engage in promotions offered through the  Services, we may share personal information with the businesses, such as Third  Party Platforms, with which we partner to offer you those products, services,  promotions, or rewards. When you elect to engage in a particular offer or  program, you authorize us to provide your e-mail address and other information  to the associated merchant, if any. We will always provide you with the opportunity  not to share information with these businesses.</p>
        <p><strong>Other Situations: </strong>We also may disclose your information, including personal information:<br>
          In response to a subpoena or similar  investigative demand, a court order, or a request for cooperation from law  enforcement or other government agencies; to establish or exercise our legal  rights; to defend against legal claims; or as otherwise required by law. In  such cases, we may raise or waive any legal objection or right available to us.<br>
          When we believe disclosure is appropriate in  connection with efforts to investigate, prevent, or take other action regarding  illegal activity, suspected fraud or other wrongdoing; to protect and defend  the rights, property or safety of our company, our users, our employees, or  others; to comply with applicable law or cooperate with law enforcement; or to  enforce the Terns of Use or other agreements or policies.<br>
          Any third parties to whom we may disclose  personal information may have their own privacy policies that describe how they  use and disclose personal information. Those policies will govern use, handling  and disclosure of your personal information once we have shared it with those  third parties as described in this Privacy Policy. If you want to learn more  about their privacy practices, we encourage you to visit the websites of those  third parties. These entities or their servers may be located either inside or  outside the United States.</p>
        <p><strong>Aggregated and non-personal information</strong>. We may share aggregated and non-personal information we collect  under any of the above circumstances. We may also share it with third parties  to develop and deliver targeted advertising through the Services and on  websites of third parties. We may combine non-personal information we collect  with additional non-personal information collected from other sources. We also  may share aggregated information with third parties, including advisors,  advertisers and investors, for the purpose of conducting general business  analysis. For example, we may tell advertisers the number of visitors to the  Site and the most popular features people have accessed. This information does  not contain any personal information and may be used to develop website content  and services that we hope you and other users will find of interest and to  target content and advertising.</p>
        <p><strong>In the event of a merger, sale, or bankruptcy</strong><br>
          In the event that we or any portion of the business  represented by the Services, are acquired by or merged with a third party  entity, we reserve the right, in any of these or similar circumstances, to  transfer or assign any or all of the information we have collected as part of  such merger, acquisition, sale, or other change of control.<br>
          In the event of our bankruptcy, insolvency,  reorganization, receivership, or assignment for the benefit of creditors, or  the application of laws or equitable principles affecting creditors' rights  generally, we may not be able to control how your personal information is  treated, transferred, or used.</p>
        <p><strong>Third-party websites</strong><br>
          Through the Services, you may be able to click on  a link to access other websites that do not operate under this Privacy Policy.  For example, if you click on a link to an external article, you may be taken to  a website that we do not control. These third-party websites may independently  solicit and collect information, including personal information, from you and,  in some instances, provide us with information about your activities on those  websites. We recommend that you consult the privacy policies of all third-party  websites you visit by clicking on the "privacy" link typically  located at the bottom of the webpage you are visiting.</p>
        <p><strong>How you can access your information</strong><br>
          If you are a Member, you have the ability to  review and update the information you have provided us by logging into your  account and clicking on "Settings". You can also review and update  information in your public profile by clicking on the "Profile" link.<br>
          You also can review and update that information  by contacting us at the e-mail address provided below in the "How to  contact us" section of this Privacy Policy.</p>
        <p><strong>How you can remove your information</strong><br>
          <strong>Closing your account</strong>. If you are a Member, you may choose to resign and close your account  at any time by visiting the "Settings" page for your account. After  you close your account, you will not be able to sign in to the Services or  access any of the information you have provided us. Upon closing your account,  your public profile information will no longer be accessible from the Services,  but may still be cached by Internet search engines.<br>
          <strong>Retention of information </strong>. If you close your account, we may still retain certain information  associated with your account for analytical purposes and recordkeeping  integrity, as well as to prevent fraud, collect any fees owed, enforce our  terms and conditions, take actions we deem necessary to protect the integrity  of our web site or our users, or take other actions otherwise permitted by law.  Further, because of the complexities of the technology involved, we cannot  guarantee total or irrevocable deletion of your account information, and we  cannot provide you with any specific timelines for deletion. In addition, if  certain information has already been provided to third parties as described in  this Privacy Policy, retention of that information will be subject to those  third parties' policies.<br>
          <strong>Your choices about collection and use of your  information</strong><br>
          You can choose not to provide us with certain  information, but that may result in you being unable to use some features of  the Services. For example, such information may be required for you to:  register as a Member; participate in things like proposing dates and responding  to date proposals; participate in our Rewards Program and other contests or  promotions we may offer from time to time; ask questions; send messages to  Members; or initiate other transactions on through the Services.<br>
          If you are a Member, you can elect not to share  any of your profile information publicly by visiting your Settings page and  selecting to have your profile available only to users signed into the  Services. This does not prevent us from sharing your information with third  parties as specified above.<br>
          Further, to the extent we send commercial or  promotional e-mails to Members, you will be able to opt-out of receiving those  e-mails, either in your Settings or within the body of any such e-mail.<br>
          You may "opt out" of the collection of  your information for third party analytics purposes by following the directions  provided by our third party analytics vendor. If you “opt out” with our third  party analytics provider, that action is specific to the information we collect  specifically for that provider, and does not limit our ability to collect  information from you, under the terms of this privacy policy, for other  vendors.<br>
          In addition, if we have already provided your  information to a third party (such as a service provider) before you have  changed your preferences or updated your information, you may have to change  your preferences directly with that third party.<br>
          We may send you, as a Member, other types of  transactional and relationship e-mail communications, such as service  announcements, administrative notices, and surveys, without offering you the  opportunity to opt-out of receiving them, as our ability to communicate with  you in some instances is necessary for your use of the Services as a Member.<br>
          Please note that changing information in your account,  or otherwise opting-out of receipt of certain e-mail communications, will only  affect future activities or communications from us.</p>
        <p><strong>How we protect your personal information</strong><br>
          We take appropriate security measures (including  physical, electronic and procedural measures) to help safeguard your personal  information from unauthorized access and disclosure. For example, only  authorized employees and third parties who have agreed to be bound by  confidentiality restrictions, such as consultants, may be permitted to access  personal information, and they may do so only for permitted business functions.  In addition, we use SSL encryption in the transmission of your sensitive  personal information between your system and ours, and we use firewalls to help  prevent unauthorized persons from gaining access to your personal information.<br>
          We want you to feel confident using the Services.  However, no system can be completely secure. Therefore, although we take steps  to secure your information, we do not promise, and you should not expect, that  your personal information, searches, or other communications will always remain  secure. Users should also take care with how they handle and disclose their  personal information and should avoid sending personal information through insecure  e-mail. Please refer to the Federal Trade Commission's website at <a href="http://www.ftc.gov/bcp/menus/consumer/data.shtm" target="_blank">http://www.ftc.gov/bcp/menus/consumer/data.shtm</a>for information about how to protect yourself against identity theft.</p>
        <p><strong>Children's privacy</strong><br>
          Although  the Services are meant for a general audience, we restrict their use to  individuals age 18 and above. We do not knowingly seek or collect personal  information from children under the age of 13.</p>
        <p><strong>Visiting the Site from outside the United States</strong><br>
          This Privacy Policy is intended to cover  collection of information from residents of the United States. If you are  accessing the Services from outside the United States, please be aware that  your information may be transferred to, stored, and processed in the United  States where our servers are located and our central database is operated. The  data protection and other laws of the United States and other countries might  not be as comprehensive as those in your country. Please be assured that we seek  to take reasonable steps to ensure that your privacy is protected. By using the  Services, you understand that your information may be transferred to our  facilities and those third parties with whom we share it as described in this  Privacy Policy.</p>
        <p><strong>No rights of third parties</strong><br>
          This Privacy Policy does not create rights  enforceable by third parties or require disclosure of any personal information  relating to users of the Services.</p>
        <p><strong>Changes to this Privacy Policy</strong><br>
          We will occasionally update this Privacy Policy  to reflect changes in our practices and in the Services. When we post changes  to this Privacy Policy, we will revise the "last updated" date at the  top of this Privacy Policy. If we make any material changes in the way we  collect, use, and/or share your personal information, we will notify you by  sending an e-mail to the e-mail address you most recently provided us in your  account, profile or registration (unless we do not have such an e-mail  address), and/or by prominently posting notice of the changes through the  Services. We recommend that you check the Services from time to time to inform  yourself of any changes in this Privacy Policy or any of our other policies.</p>
        <p><strong>How to contact us</strong><br>
          If you have any questions about this Privacy  Policy or our information-handling practices, or if you would like to request  information about our disclosure of personal information to third parties for  their direct marketing purposes, please contact us by e-mail at  support@whereweallmeet.com or postal mail as follows:<br>
          Privacy Officer<br>
          The Man You Want, LLC.<br>
          5940 S. Rainbow Blvd.<br>
          Las Vegas, NV 89118</p>
      </div>
    </div>

    <div id="terms-and-conditions-dialog" class="public-profile-dialog dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>WhereWeAllMeet.com Terms of Use</h2>
      </div>
      <div class="dialog-content">
        <p><em>Last Updated: August 1, 2014</em></p>
        <p>  In order to use the Services, you must agree to  be bound by these Terms of Use (the "<u>Terms</u>") and by our  Privacy Policy, whether or not you register as a member (a "<u>Member</u>"). <strong>If you object to anything in these Terms or the Privacy Policy, you are  prohibited from using the Services.</strong><br>
          These Terms and Privacy Policy are subject to  change by us at any time, effective upon posting through the Services; by  accessing the Services after any such change, you accept the Terms as modified.<br>
          The Services are currently under intense  development and different features will be rolled out over the coming months.  Some parts of these Terms refer to functionality that have not yet been  implemented or deployed. Once such functions are available for use, by  continuing to use the Services you agree that those parts of these Terms shall  go into effect.  </p>
        <p>1.<strong>Eligibility</strong>.<strong></strong></p>
        <p>  1.<strong>Adult  Users Only</strong>. The Services are not intended for individuals under 18 years of  age. <strong>If you are under 18, you are strictly prohibited from using the  Services</strong>, and you may not access any features that allow you to provide  information to us or communicate and share information with other users.  Accordingly, you represent and warrant that you are 18 years of age or older  and that you have the right, authority and capacity to enter agree to and abide  by these Terms.<br>
          2.<strong>No  Criminal History</strong>. By accessing the Services, you represent and warrant that  you have never been convicted of a felony and are not required to register as a  sex offender with any government entity. We do not currently conduct criminal  background searches on Members. However, we reserve the right to conduct a  criminal background check, at any time and using available public records, to  confirm compliance with these Terms.<br>
          3.<strong>Void  Where Prohibited. </strong>You are responsible for ensuring that your use of the  Services complies with all laws, rules and regulations applicable to you. These  Terms are void and use of the Services is not permitted where such use is  prohibited.</p>
        <p>  2.<strong>Use  of the Services</strong>.<strong></strong></p>
        <p>  1.<strong>Personal  Safety</strong>. Your security and safety are paramount to us. The Services  naturally promote sharing of personal information among Members and non-  Members. You should be aware that some of your profile information as a Member  shall be public, could be indexed by Internet search engines and may be used  for any purpose. We strongly advise you to use the utmost caution before  sharing any personally identifiable information with others, or with any other  users, including Members. We do not and cannot assure that it is safe for you  to have direct contact with any other individual that you come into contact  with through the Services. If you believe that any individual is harassing you  or is otherwise using personal information about you for unlawful purposes, we  encourage you to first inform local law enforcement authorities and then to  contact us at support@whereweall.com so that we may take appropriate action to  block further use of the Services by any individuals who may have accessed them  for improper purposes.<br>
          2.<strong>Unique  and Accurate Profile Information </strong>.<strong></strong><br>
          i.You  agree that, as a Member, you will create and use only one unique profile.<br>
          ii.You agree that you will be truthful, accurate and complete in the  information presented in your Member profile.<br>
          iii.You agree that you will maintain any photos posted to your Member  profile to within two (2) years of the date taken.<br>
          3.<strong>Use  of Information Provided by Other Users </strong>.<strong></strong><br>
          i.You  agree to use any information (personal or otherwise) provided to you by  Members, or otherwise through the Services, in a lawful and responsible manner.  You agree that you will not use information about Members for any reason  without the express prior consent of the Member that has provided such  information to you.<br>
          ii.You  further agree not to engage in advertising to, or solicitation of, other  Members, including but not limited to: solicitation or advertising through the  Services; solicitation to attend parties or other social functions for  commercial purposes; solicitation to network for commercial purposes; and  transmission of chain letters or junk messages and email.<br>
          4.<strong>Code of Conduct </strong>. By accessing the Services, you agree to the  following code of conduct:<br>
          i.You  will not publish, display or use (hereinafter "<u>post</u>") any  defamatory, abusive, obscene, profane, threatening, harassing, sexually  oriented, racially offensive, discriminatory or otherwise offensive or illegal  material.<br>
          ii.You  will treat all fellow Members with dignity and respect.<br>
          iii.You  will notify us promptly of any Member's violation of these Terms.<br>
          iv.You will not include in your Member profile any telephone numbers,  street addresses, last names, URLs, email addresses or other contact  information; if you do so, it is at your own risk and we assume no  responsibility for use of such information.<br>
          v.You will not impersonate any person or entity.<br>
          vi.You will not "stalk" or otherwise harass any Member or  other individual accessing the Services.<br>
          vii.You will not express or imply that any statements you make are  endorsed by us without specific prior written consent.<br>
          viii.You  will not use manual or automatic processes to retrieve, index, datamine, or in  any way reproduce or circumvent the navigational structure or presentation of  the Services or their contents. This prohibition does not include standard  indexing by Internet search engines, which hereby is explicitly permitted.<br>
          ix.You will not remove any copyright, trademark or other proprietary  rights notices displayed through the Services.<br>
          x.You  will not post, distribute or reproduce in any way any copyrighted material,  trademarks, or other proprietary information without obtaining the prior  consent of the owner of such proprietary rights.<br>
          xi.You will not interfere with or disrupt the Services or the servers  or networks connected to the Services.<br>
          xii.You  will not post, email or otherwise transmit any material that contains software  viruses or any other computer code, files or programs designed to interrupt,  destroy or limit the functionality of any computer software or hardware or  telecommunications equipment.<br>
          xiii.You will not forge headers or otherwise manipulate identifiers in  order to disguise the origin of any information transmitted through the  Services.<br>
          xiv.You  will not "frame" or "mirror" any part of the Services  without our prior written authorization. You also shall not use metatags or  code or other devices containing any reference to the Services in order to  direct any person to any other website for any purpose.<br>
          xv.You  will not modify, adapt, sublicense, translate, sell, reverse engineer,  decipher, decompile or otherwise disassemble any portion of the Services or any  software used on or for the Services, or cause or assist others to do so.<br>
          5.<strong>Location-Based  Services</strong>. We may offer features that are based on the location of Members  and which may report on those Members' current locations (the " <u>Location-Based  Services</u>"). Use of Location-Based Services is solely at your  discretion. Should you use Location-Based Services, you consent to collection  and dissemination of your location information through the Services. Under no  circumstances shall we be liable for claims or for any damages there from,  arising out of your informed decision to disseminate your location information  together with your profile information through the Services.<br>
          6.<strong>Commercial  Use</strong>. The Services are generally for the use of individual Members only.  However, from time to time, we may approve commercial use of the Services  through corporate partnerships and agreements. Unless specifically authorized  for commercial use by us under such an arrangement, organizations, companies,  and/or businesses may not become Members and should not use the Services for  any purpose. Illegal and/or unauthorized uses of the Services, including  collecting usernames and/or email addresses of Members by electronic or other  means for the purpose of sending unsolicited email, are prohibited.<br>
          7.<strong>Compliance  with Applicable Laws</strong>. Your use of the Services, including but not limited  to any content you post, must be and shall be in accordance with any and all  laws and regulations that apply to you and your use of the Services.<br>
          8.<strong>Disclaimers  of Responsibility for User Actions </strong>.<strong></strong><br>
          i.<strong>You  are solely responsible for your interactions and arrangements with other  individuals. </strong>You understand that we do not, in any way, screen individuals,  including Members, nor do we inquire into the backgrounds of Members or attempt  to verify their statements. We make no representations or warranties as to (i)  the conduct of Members, (ii) Members' compatibility with current or future  Members, (iii) any information concerning any venues, dates (proposed,  accepted, or otherwise), schedules or events suggested by Members or otherwise  through the Services. We do not verify or check any arrangements, including  proposed dates or schedules, on behalf of Members, and we therefore make no  guarantees about such dates or schedules. In no event shall we be liable for  any damages whatsoever, whether direct, indirect, general, special,  compensatory, consequential, and/or incidental, arising out of or relating to  the conduct of you or anyone else in connection with the Services, including,  without limitation, bodily injury, emotional distress, and any damages  resulting in any way from communications or meetings with Members or persons  you may otherwise meet through the Services. As such, you agree to take  reasonable precautions and exercise the utmost personal care in all  interactions with other Members or any other individual you come into contact  with through the Services, particularly if you decide to meet such Members or  individuals in person. In addition, you agree to review our Dating Safety Tips.  You understand and agree that we make no guarantees, express or implied,  regarding the provenance of, or your compatibility with, individuals you meet  through the Services. For example, you should not, under any circumstances,  provide your financial information<strong></strong><br>
          (e.g., credit card or bank account numbers) to  other individuals.<br>
          ii.<strong>No  Reliance on Content</strong>. Opinions, advice, statements, offers, or other  information or content made available through the Services are those of their  respective authors and should not necessarily be relied upon. Such authors are  solely responsible for such content. We do not: (i) guarantee the accuracy,  completeness, or usefulness of any information on the Services or (ii) adopt,  endorse or accept responsibility for the accuracy or reliability of any  opinion, advice, or statement made by any party that appears on the Services.  Under no circumstances will we or our affiliates be responsible for any loss or  damage resulting from your reliance on information or other content posted  through the Services or transmitted to or by any Members.</p>
        <p>  3.<strong>Reservation  of Rights</strong>.<strong></strong></p>
        <p>  1.<strong>Right  to Terminate or Deny Service</strong>. You understand that we, at our sole  discretion, at any time, for any reason or no reason whatsoever, can deny or  block any user from the Services and terminate any user's account if he/she is  a Member.<br>
          2.<strong>Right  to Request Information</strong>. You understand that we have the right to request  complete, accurate and current information confirming eligibility for  subscription and/or membership and you agree to provide that information in  response to such a request.<br>
          3.<strong>Rights  to Disclose</strong>.<strong></strong><br>
          i.<strong>Disclosure  by Law</strong>. You acknowledge and agree that we have the right to disclose  information you provide if required to do so by law at the request of a third  party, or if we, in our sole discretion, believe that disclosure is reasonable  to (1) comply with the law, request or orders from law enforcement, or any  legal process (whether or not such disclosure is required by applicable law);  (2) protect or defend our, or a third party's, rights or property; or (3)  protect someone's health or safety, such as when harm or violence against any person  (including a user or Member) is threatened.<br>
          ii.<strong>Disclosure  to Protect Abuse Victims</strong>. Notwithstanding any other provision of these  Terms or the Privacy Policy, we reserve the right, but have no obligation, to  disclose any information that you submit, if in our sole opinion, we suspect or  have reason to suspect, that the information involves a party who may be the  victim of abuse in any form. Abuse may include, without limitation, elder  abuse, child abuse, spousal abuse, neglect, or domestic violence. Information  may be disclosed to authorities that we, in our sole discretion, deem  appropriate to handle such disclosure. Appropriate authorities may include,  without limitation, law enforcement agencies, child protection agencies, or  court officials.<br>
          4.<strong>Right  to Review Content; No Duty to Monitor</strong>. You acknowledge and agree that we  have no duty whatsoever to prescreen, control, monitor or edit the content  posted by Members and we are not liable for content that is provided by others.  However, you understand and agree that we may, but are not required to, review,  edit and delete any content, email, messages, photos, dates or profiles that,  in our sole judgment and discretion: (i) violate these Terms; (ii) may be  offensive, disturbing, unsafe, or illegal; or (iii) may violate any rights of  other Members or third parties.<strong></strong><br>
          5.<strong>Right  to Change Services</strong>. You acknowledge and agree that we may from time to time  modify, change, suspend or discontinue, temporarily or permanently, in whole or  in part, any aspect or feature of the Services without notice to you, including  changes to usage and to access procedures. You acknowledge and agree that we  shall not be liable to you or any third party for any such modification,  change,<br>
          suspension or discontinuance.<br>
          6.<strong>Right  to Conduct Research; Informed Consent </strong>. By accessing the Services, you  agree to allow us to anonymously collect and use information from you and your  experience with the Services to conduct research about the Services and to  improve the products and user experience therein. All such information  collection and use will be in accordance with our Privacy Policy.<strong></strong></p>
        <p>  4.<strong>Account  Security</strong>.<strong></strong></p>
        <p>  1.<strong>User  Obligations </strong>.<strong></strong><br>
          i.You  understand and agree that you are responsible for maintaining the  confidentiality and security of the username and password that you designate  during the process of becoming a Member, and you are fully responsible for  anything that occurs under your username and password.<br>
          ii.You  agree to (1) immediately notify us of any unauthorized use of your username or  password or any other breach of security and (2) ensure that you exit from your  account at the end of each session. You acknowledge and agree that we will not  be liable for any loss or damage arising from your failure to comply with this  provision.<br>
          iii.You  agree to use extra care when accessing your account from a public or shared  computer, so that others are not able to view or record your password or other  personal information. If you share your computer with others, you may wish to  consider disabling your auto-sign in feature.<br>
          2.<strong>Our  Obligations </strong>. We use industry-standard techniques to safeguard your account  information. However, perfect security is not possible on the Internet, and  therefore we cannot and do not guarantee that information provided to us will  not become public under any circumstances. This is particularly true for any  information you provide on public areas of the website, including public  profile information, with is fully public, may be indexed by Internet search  engines and may be used for any purpose.</p>
        <p>  5.<strong>Proprietary  Rights; Use License </strong>.<strong></strong></p>
        <p>  1.<strong>Ownership</strong>.  We and our licensors own and retain all proprietary rights in the Services. The  Services may contain the copyrighted material, trademarks, and other  proprietary information of us and our licensors (the "<u>Site Content</u>").  Except for Site Content that is in the public domain or for which permission  has been provided, you may not copy, modify, publish, transmit, distribute,  perform, display, or sell any Site Content.<br>
          2.<strong>Use  License </strong>. Subject to these Terms, we grant to you a limited, revocable,  non- exclusive, fully paid license to access the Site Content, for the sole and  limited purpose of facilitating your use of the Services.<br>
          3.<strong>User  Content </strong>. You acknowledge and agree that if you use the Services to  contribute content (such as profile information, comments, responses, etc.)  ("<u>User Content</u>"), you hereby do and shall grant us a  non-exclusive, worldwide, royalty- free, transferable, sublicensable right to  use, modify, reproduce, distribute, prepare derivative works of, display,  publish, perform and otherwise fully exploit such User Content (including all  related intellectual property rights) in any media format, through any media  channel, for any purpose and to allow others to do so. You also hereby do and  shall grant each user of the Services a non-exclusive license to access your  User Content through the Services and to use such User Content as permitted by  the Services and under these Terms.<br>
          You represent, warrant and agree that you will  not contribute any User Content that:<br>
          ·infringes, violates or otherwise interferes with any copyright or  trademark of another party;<br>
          ·reveals any trade secret, unless you own the trade secret or have the  owner's permission to disclose it;<br>
          ·infringes any intellectual property right of another or the privacy or  publicity rights of another;<br>
          ·is libelous, defamatory, obscene, pornographic, abusive, indecent,  threatening, harassing, hateful, offensive or otherwise violates any law or  right of any third party; or<br>
          ·may contain a virus, trojan horse, worm, time bomb or other computer  programming routine or engine that is intended to damage, detrimentally  interfere with, surreptitiously intercept or expropriate any system, data or  information.</p>
        <p>  6.<strong>Copyright  Policy</strong>. </p>
        <p>If you are a copyright owner or an agent thereof and believe that  any content on the Services infringes upon your copyrights, you may submit a  notification pursuant to the Digital Millennium Copyright Act by providing our  Copyright Agent for notice of claims of copyright infringement (The Man You  Want, LLC Legal, 5940 S. Rainbow Blvd., Las Vegas, NV 89118) with the following  information in writing:<br>
          1.A  physical or electronic signature of a person authorized to act on behalf of the  owner of an exclusive right that is allegedly infringed;<br>
          2.Identification of the copyrighted work claimed to have been  infringed, or, if multiple copyrighted works are covered by a single  notification, a representative list of such works;<br>
          3.Identification  of the material that is claimed to be infringing or to be the subject of  infringing activity and that is to be removed or access to which is to be  disabled and information reasonably sufficient to permit the service provider  to locate the material;<br>
          4.Information reasonably sufficient to permit us to contact you, such  as an address, telephone number, and, if available, an electronic mail;<br>
          5.A statement that you have a good faith belief that use of the  material in the manner complained of is not authorized by the copyright owner,  its agent, or the law; and<br>
          6.A statement that the information in the notification is accurate,  and under penalty of perjury, that you are authorized to act on behalf of the  owner of an exclusive right that is allegedly infringed.</p>
        <p>  7.<strong>Membership </strong>. </p>
        <p>You may become a Member at no cost. As a Member, you will have the  ability to use some, but not all, of the available features of the Services. In  order to access additional features, you must become a paying subscriber.</p>
        <p>  8.<strong>Subscriptions  and Billing </strong>.<strong></strong></p>
        <p>  1.<strong>Subscription  Plans and Policies </strong>. Please see Subscribe for a description of the current  subscription plans and prices. Please note that the Subscription Policies that  are disclosed to you in subscribing to the Services are deemed part of these  Terms. Please see Billing Details for a description of such policies. For the  purposes of these Terms, the term "Member" includes subscribers,  unless usage indicates otherwise. From time to time, we may remove the profiles  of non-subscribers.<br>
          2.<strong>Billing </strong>. We use a third-party payment processor (the "<u>Payment Processor</u>")  to bill you through an online account (your " <u>Billing Account</u>")  for use of the Services as a subscriber. The processing of payments will be  subject to the terms, conditions and privacy policies of the Payment Processor  in addition to these Terms. We are not responsible for error by the Payment  Processor. By subscribing, you agree to pay us, through the Payment Processor,  all charges at the prices then in effect for any use of<br>
          the Services in accordance with the subscription  plan that you have selected using your Billing Account, and you authorize us,  through the Payment Processor, to charge your chosen payment provider (your  "<u>Payment Method</u>"). You agree to make payment using that  selected Payment Method. We reserve the right to correct any errors or mistakes  that it makes even if it has already requested or received payment.<br>
          3.<strong>Payment  Method </strong>. The terms of your payment will be based on your Payment Method and  may be determined by agreements between you and the financial institution,  credit card issuer or other provider of your chosen Payment Method. If we,  through the Payment Processor, do not receive payment from you, you agree to  pay all amounts due on your Billing Account upon demand.<br>
          4.<strong>Recurring  Billing </strong>. Most subscription plans to the Services consist of an initial  period, for which there is a one-time charge, followed by recurring period  charges as agreed to by you. By choosing a recurring subscription plan, you  acknowledge that your subscription has an initial and recurring payment feature  and you accept responsibility for all recurring charges prior to cancellation.  WE MAY SUBMIT PERIODIC CHARGES (E.G., MONTHLY) WITHOUT FURTHER AUTHORIZATION  FROM YOU, UNTIL YOU PROVIDE PRIOR NOTICE (RECEIPT OF WHICH IS CONFIRMED BY US)  THAT YOU HAVE TERMINATED THIS AUTHORIZATION OR WISH TO CHANGE YOUR PAYMENT  METHOD. SUCH NOTICE WILL NOT AFFECT CHARGES SUBMITTED BEFORE WE REASONABLY  COULD ACT. TO TERMINATE YOUR AUTHORIZATION OR CHANGE YOUR PAYMENT METHOD, GO TO  ACCOUNT SETTINGS.<br>
          5.<strong>Current  Information Required </strong>. YOU MUST PROVIDE CURRENT, COMPLETE AND ACCURATE  INFORMATION FOR YOUR BILLING ACCOUNT. YOU MUST PROMPTLY UPDATE ALL INFORMATION  TO KEEP YOUR BILLING ACCOUNT CURRENT, COMPLETE AND ACCURATE (SUCH AS A CHANGE  IN BILLING ADDRESS, CREDIT CARD NUMBER, OR CREDIT CARD EXPIRATION DATE), AND  YOU MUST PROMPTLY NOTIFY US OR OUR PAYMENT PROCESSOR IF YOUR PAYMENT METHOD IS  CANCELED (E.G., FOR LOSS OR THEFT) OR IF YOU BECOME AWARE OF A POTENTIAL BREACH  OF SECURITY, SUCH AS THE UNAUTHORIZED DISCLOSURE OR USE OF YOUR USER NAME OR  PASSWORD. CHANGES TO SUCH INFORMATION CAN BE MADE AT ACCOUNT SETTINGS. IF YOU  FAIL TO PROVIDE ANY OF THE FOREGOING INFORMATION, YOU AGREE THAT WE MAY  CONTINUE CHARGING YOU FOR ANY USE OF THE SERVICE UNDER YOUR BILLING ACCOUNT  UNLESS YOU HAVE TERMINATED YOUR SUBSCRIPTION FOR THE SERVICE AS SET FORTH  ABOVE.<br>
          6.<strong>Change  in Amount Authorized. </strong>If the amount to be charged to your Billing Account  varies from the amount you preauthorized (other than due to the imposition or  change in the amount of state sales taxes), you have the right to receive, and  we shall provide, notice of the amount to be charged and the date of the charge  before the scheduled date of the transaction. Any agreement you have with your  payment provider will govern your use of your Payment Method. You agree that we  may accumulate charges incurred and submit them as one or more aggregate  charges during or at the end of each billing cycle.<br>
          7.<strong>Auto-Renewal </strong>. Unless you opt out of auto-renewal, which can be done through your  Account Settings, your subscription to the Services will be automatically  extended for successive renewal periods of the same duration as the  subscription term originally selected, at the then-current non-promotional  subscription rate. To change or resign your subscription at any time, go to  Account Settings. If you terminate your subscription, you may use your  subscription until the end of your then-current subscription term; your  subscription will not be renewed after your then-current term expires. However,  you won't be eligible for a prorated refund of any portion of the subscription  fee paid for the then-current subscription period.<br>
          8.<strong>Reaffirmation  of Authorization </strong>. Your non-termination or continued use of the Services  reaffirms that we are authorized to charge your Payment Method. We may submit  those charges for payment and you will be responsible for such charges. This  does not waive our right to seek payment directly from you. Your charges may be  payable in advance, in arrears, per usage, or as otherwise described when you  initially subscribed to the Services.<br>
          9.<strong>Free  Trials and Other Promotions. </strong>Any free trial or other promotion that  provides subscriber-level access to the Services must be used within the  specified time of the trial. You must cancel your subscription before the end  of the trial period in order to avoid being charged a subscription fee. If you  cancel prior to the end of the trial period and are inadvertently charged for a  subscription, please contact us at Support@whereweallmeet.com.<br>
          10.<strong>Mobile  Applications </strong>. Mobile functionality of the Services may be provided for  free, but please be aware that your carrier's normal rates and fees, such as  message and data rates, may still apply and you are solely responsible for  those fees. To the extent necessary, in the event you change or deactivate your  mobile telephone number, you agree that you will update your account  information within 48 hours to ensure that your messages are not sent to the  person who acquires your old number.</p>
        <p>  9.<strong>Interaction  with Us or Our Agents </strong>. </p>
        <p>We may provide assistance and guidance to users and  Members through our employees or agents. When communicating with those  individuals, you may not be abusive, obscene, profane, offensive, sexist,  threatening, harassing, racially offensive, or otherwise behave  inappropriately. If we feel that your behavior toward any of our customer care  representatives or other employees is at any time threatening or offensive, we  reserve the right to immediately terminate your membership.</p>
        <p>  10.<strong>Termination</strong>.<strong></strong></p>
        <p>1.<strong>By  Member</strong>. You may terminate your membership and/or subscription at any time,  for any reason, by following the instructions in your Settings or by sending  written notice of termination to Whereweallmeet.com, 5940 S. Rainbow Blvd., Las  Vegas, NV 89118 or email notice of termination to support@whereweallmeet.com<br>
          2.<strong>By  Us</strong>. We, at our sole discretion, may terminate your membership and/or  subscription for any reason or no reason. We are not required to provide you  notice prior to terminating your membership and/or subscription. We are not  required, and may be prohibited, from disclosing a reason for the termination  of your account.<br>
          3.<strong>Subscriptions</strong>.  If you terminate your subscription, your subscription will remain active until  the end of your then-current subscription period (that is, the subscription  period through which you had paid prior to your termination). <strong>If we  terminate your membership because you have breached these Terms, you will not  be entitled to any refund of unused subscription fees.</strong></p>
        <p>  11.<strong>Disclaimers/Limitations</strong>.<strong></strong></p>
        <p>  1.We  are not responsible for any incorrect or inaccurate content posted through the  Services, whether caused by users, Members or by any of the equipment or  programming associated with or utilized in the Services.<br>
          2.We assume no responsibility for any error, omission, interruption,  deletion, defect, delay in operation or transmission, communications line  failure, theft or destruction or unauthorized access to, or alteration of, user  or Member communications.<br>
          3.We  are not responsible for any problems or technical malfunction of any telephone  network or lines, computer online systems, servers or providers, computer  equipment, software, failure of email or players on account of technical  problems or<br>
          traffic congestion on the Internet or at any  website or combination thereof, including injury or damage to users and/or  Members or to any other person's computer related to or resulting from  participating or downloading materials in connection with the Services.<br>
          4.Under  no circumstances will we or any of our affiliates, advertisers, promoters or  distribution partners be responsible for any loss or damage, including personal  injury or death, resulting from use of the Services, any content posted on the  Services or transmitted to Members, or any interactions between users, whether  online or offline.<br>
          5.From  time to time, we may offer new "beta" features or tools with which  its users may experiment with the Services. Such features or tools are offered  solely for experimental purposes and without any warranty of any kind, and may  be modified or discontinued at our sole discretion.<br>
          6.We  provide the SERVICES "AS IS, AS AVAILABLE," without any warranty or  condition of any kind (express, implied or statutory) AND YOUR ACCESS OF the  site IS AT YOUR OWN RISK. We do not warrant that our services will meet your  requirements or result in any particular outcome, or that the operation will be  uninterrupted or error-free. To the fullest extent allowed by law, we  specifically disclaim any implied warranties of title, merchantability,  non-infringement and fitness for a particular purpose. SOME STATES DO NOT ALLOW  THE DISCLAIMER OF IMPLIED WARRANTIES, SO THE FOREGOING DISCLAIMER MAY NOT APPLY  TO YOU.<br>
          7.We  shall not be liable to you for any DIRECT, special, incidental, indirect, punitive  or consequential damages (even if you have advised us of the possibility of  such damages). Our cumulative liability relating to your use of the SERVICES  (regardless of the basis), shall not exceed the greater of (a) amounts that you  PAID TO US IN THE PREVIOUS TWELVE MONTHS and (b) $100. SOME states do not allow  the exclusion or limitation of incidental or consequential damages, so the  above limitation or exclusion may not apply to you.</p>
        <p>  12.<strong>Third  Party Links </strong>. </p>
        <p>You may be provided links to other websites or resources  through the Services. Because we have no control over such sites and resources,  you acknowledge and agree that we are not responsible for the availability of  such external sites or resources, and do not endorse and are not responsible or  liable for any content, advertising, products or other materials on or  available from such sites or resources. You further acknowledge and agree that  we shall not be responsible or liable, directly or indirectly, for any damage  or loss caused or alleged to be caused by or in connection with the use of, or  reliance upon, any such content, goods or services available on or through any  such site or resource.</p>
        <p>  13.<strong>Compliance  with Laws </strong>. </p>
        <p>You will only use the Services in a manner consistent with  these Terms and any and all applicable local, state, national and international  laws and regulations, including, but not limited to, United States export  control laws. You represent and warrant that you are not located in, under the  control of, or a national or resident of any country which the United States  has (a) embargoed goods, (b) identified as a "Specially Designated  National," or (c) placed on the Commerce Department's Table of Deny  Orders. Registration for, and use of, the Services are void where prohibited. To  the extent that the Services are not legal in your jurisdiction, you may not  use the Services; the Services may not be used where prohibited by law.</p>
        <p> 14.<strong>Jurisdiction  and Choice of Law </strong>. </p>
        <p>If there is any dispute arising out of the Services, by  using the Services you expressly agree that any such dispute shall be governed  by the laws of the State of Nevada, without regard to its conflict of law  provisions, and you expressly agree and consent to the exclusive jurisdiction  and venue of the state and federal courts of the State of Nevada, in Clark  County, for the resolution of any such dispute.</p>
        <p>  15.<strong>Indemnity  by You </strong>. </p>
        <p>You agree to indemnify and hold us, our subsidiaries, affiliates,  officers, agents, and other partners and employees, harmless from any loss,  liability, claim, or demand, including reasonable attorney's fees, made by any  third party due to or arising out of your use of the Services in violation of  these Terms and/or arising from a breach of these Terms and/or any breach of  your representations and warranties set forth above.</p>
        <p>  16.<strong>Miscellaneous </strong>.<strong></strong></p>
        <p>  1.<strong>Entire Agreement </strong>. These Terms contain the entire agreement  between you and us regarding the use of the Services.<br>
          2.<strong>Severability </strong>. If any provision of these Terms is held to be invalid, illegal or  unenforceable in any respect, that provision shall be limited or eliminated to  the minimum extent necessary so that these Terms shall otherwise remain in full  force and effect and enforceable.<br>
          3.<strong>Survival </strong>. Even after your membership or subscription is terminated, or your use of  the Services discontinues, these Terms will remain in effect. All terms that by  their nature may survive termination of these Terms shall be deemed to survive  such termination.<br>
          4.<strong>Waiver </strong>. Our failure to enforce any part of these Terms shall not constitute a waiver  of our right to later enforce that or any other part of these Terms. Waiver of  compliance in any particular instance does not mean that we will do so in the  future. In order for any waiver of compliance with these Terms to be binding,  we must provide you with written notice of such waiver, provided by one of our  authorized representatives.<br>
          5.<strong>Headings </strong>. The section and paragraph headings in these Terms  are for convenience only and shall not affect the interpretation of these  Terms.<br>
          6.<strong>No Third Party Beneficiaries </strong>. You agree that, except as  otherwise expressly provided in these Terms there shall be no third party  beneficiaries.<br>
          7.<strong>Relationship of the Parties </strong>. You and we are independent  contractors, and no agency, partnership, joint venture, employee-employer or  franchisor-franchisee relationship is intended or created by these Terms.<br>
          Please contact us at <a href="mailto:support@themanyouwant.com">support@whereweallmeet.com </a>with any questions regarding these Terms. WhereWeAllMeet.com  is a service mark of The Man You Want, LLC., all rights reserved.<br>
          I HAVE READ THESE TERMS AND AGREE TO ALL OF THE  PROVISIONS CONTAINED ABOVE.</p>
      </div>
    </div>

    <div id="dating-agent-accept-invitation-dialog" class="dialog">
      <i class="close-dialog fa fa-times-circle-o"></i>
      <div class="dialog-header">
        <h2>You have a dating agent invitation request</h2>
      </div>
      <div class="dialog-content">
        <p><span></span> has invited you to join their chat. By accepting this request you will enable the chat feature.</p>
        <div id="buttons">
          <a id="decline-chat" data-status="decline">Decline</a>
          <a id="accept-chat" data-status="accept">Accept</a>
        </div>
      </div>
    </div>



    <div id="upgrade-message-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-message-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To send this message to this member,
            <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can send and receive messages to and from this member and many others. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form>

    </div>

    <div id="upgrade-chat-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-chat-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To start a chat with this member,
            <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can start a chat talk with this member and many others. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form>

    </div>

    <div id="upgrade-invite-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-message-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To send this event invite to a member,
            <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can send invites to members. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form>

    </div>

    <div id="upgrade-friendship-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-message-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To send this friendship request to a member,
            <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can send friend request to members. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form>

    </div>

    <div id="upgrade-hello-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-hello-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To send this hello to this member,
            <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can send and receive hellos to and from this member and many others. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form>

    </div>

    <div id="upgrade-favorite-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-favorite-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To save this member as a favorite,
            <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can save this member and many others as a favorite. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form>

    </div>

    <div id="upgrade-refer-friend-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-refer-friend-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To refer a friend, <span>Upgrade Now</span></h5>
          <p>As soon as you upgrade you can refer a friend. </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form></div>

    <div id="upgrade-refer-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-chat-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To refer a member, <span>Upgrade Now</span></h5>
          <p>
            As soon as you upgrade you can refer a member.
          </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form></div>

    <div id="upgrade-book-dialog" class="public-profile-dialog-upgrade-common dialog">

      <form id="upgrade-chat-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To book a member, <span>Upgrade Now</span></h5>
          <p>
            As soon as you upgrade you can book a member.
          </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form></div>

    <div id="upgrade-report-dialog" class="public-profile-dialog-upgrade-common dialog">
      <form id="upgrade-chat-form" action="/Membership/upgrade" class="clearfix" accept-charset="utf-8" method="post">    <div id="upgrade-content" class="clearfix">
          <h5>To report to a member, <span>Upgrade Now</span></h5>
          <p>
            As soon as you upgrade you can report to a member.
          </p>
          <p class="submit">
            <button type="submit" name="#" class="button">UPGRADE</button>
          </p>
        </div>
      </form></div>
  </div>
  </div>

@endsection