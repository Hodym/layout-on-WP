<?php 
/*
Template Name: contact
*/
?>

<?php get_header();?>

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-page__map">
                        <img src="http://placehold.it/640x680" alt="Map"/>
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191401.4520445004!2d29.580031624359258!3d50.926955633813975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472bab1c9c15e0ab%3A0x74e778cb8f9f67ec!2z0JrRgNCw0L_QuNCy0L3Rjywg0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMDcyMzQ!5e0!3m2!1sru!2sua!4v1639000002240!5m2!1sru!2sua" width="640" height="680" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                        <div class="address">
                            <i class="icon">
                                <!--<img src="" alt="Marker icon">-->
                                <svg width="18" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 12.5A3.75 3.75 0 119 5a3.75 3.75 0 010 7.5zm0-6A2.25 2.25 0 109 11a2.25 2.25 0 000-4.5z"
                                        fill="#FFCC5F"></path>
                                    <path
                                        d="M9 21.5l-6.327-7.462a25.635 25.635 0 01-.261-.338A8.167 8.167 0 01.75 8.75a8.25 8.25 0 1116.5 0 8.164 8.164 0 01-1.661 4.948l-.001.002s-.225.296-.259.335L9 21.5zm-5.391-8.704c.002 0 .176.231.215.28L9 19.182l5.182-6.113c.034-.04.209-.273.21-.274A6.676 6.676 0 0015.75 8.75a6.75 6.75 0 00-13.5 0 6.679 6.679 0 001.36 4.046h-.001z"
                                        fill="#FFCC5F"></path>
                                </svg>
                            </i>
                            <!-- /.icon -->
                            <p>Level 9 ariake Frontier Building Tower B, 3-7-26 Ariake, Koto-Ku, Tokyo, Japan</p>
                        </div>
                        <!-- /.address -->
                    </div>
                    <!-- /.contact-page__map -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-5 offset-md-1">
                    <div class="contact-page__content">
                        <h2 class="title"><span>Contact us</span></h2>
                        <small>E-mails</small>
                        <ul>
                            <li><a href="mailto:khodimchukigor@gmail.com">khodimchukigor@gmail.com</a></li>
                            <li><a href="mailto:hodimchukdmitriy@gmail.com">hodimchukdmitriy@gmail.com</a></li>
                        </ul>
                        <h4>Reach out to us with any questions</h4>
                        <form class="form">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
                                </div>
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                    <!-- /.contact-page__content -->
                </div>
                <!-- /.col-md-5 offset-md-1 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.contact-page -->

<?php get_footer();?>