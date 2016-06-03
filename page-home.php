<?php
/*
 * This template calls header and the home page content
 */

get_header(); ?>
<style>
    #site-header {
        background-image: url('<?php bloginfo('template_directory'); ?>/images/students.jpeg');
        background-size: cover;
        background-position: center center;
    }
</style>

	<header id="site-header" class="row">
        <div id="layer">
    		<div class="header-text">
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <h5><?php echo $description; /* WPCS: xss ok. */ ?></h5>
                <?php
                endif; ?>
    			<h1><?php bloginfo( 'name' ); ?></h1>
                <a class="btn btn-default btn-lg" role="button" href="/day-1">Start at Day 1</a>
    		    <a href="#">or download the pdf.</a>
                <a class="hero-triangle" href="#starthere"></a>
            </div>
        </div>
	</header><!-- #site-header -->
    <div class="main">
        <div id="starthere" class="row section">
            <div class="inner">
                <h3>Before you begin</h3>
                <p>
                    This is not a devotional. It is a tool to help you learn to encounter God through His Word. The next 30 days will help you learn to read the whole Bible asking four helpful questions.  Our desire is not merely to put a 30 day resource in your hand for you to consume but instead to use the next 30 days to train you how to encounter God and walk in His ways.
                </p>
                <p>
                    The passages of scripture revolve around three core aspects of anyone who is in Christ—namely that we are family, servants and missionaries. We will cycle through these three core identities every three days.
                </p>
            </div>
        </div>
        <div class="section row feat orange-brdr">
            <div class="inner id">
                <div class="col-sm-4">
                    <div class="id-icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/father-family.png" />
                    </div>
                    <p>
                        God is our <span>Father</span> who has adopted us through faith in person and work of Jesus Christ
                    </p>
                    <p>
                        We, therefore, are <span>family</span> who love one another like family.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="id-icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/king-servant.png" />
                    </div>
                    <p>
                        God is <span>servant king</span> who sacrificially served us through his life, death and resurrection. 

                    </p>
                    <p>
                        We, therefore, are <span>servants</span> who willingly serve the least, last and lost by tangibly demonstrating God’s good news on the earth.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="id-icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/spirit-missionary.png" />
                    </div>
                    <p>
                        God is the <span>Holy Spirit</span> who was sent by Jesus to indwell his people so that they may make much of Jesus.  
                    </p>
                    <p>
                        We, therefore, are <span>missionaries</span> sent out and empowered by the Spirit to proclaim the gospel.
                    </p>
                </div>
            </div>
        </div>
            <div class="row orange-brdr">
                <div class="content inner">
                    <h3>What You'll Find</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Stop &amp; Pray</h4>
                        </div>
                        <div class="col-md-10">
                            <p>
                                The God who created the entire universe wants to talk to you but you’ll need the help of His Spirit to help you to see and savor Jesus with a willingness to live out your new identity.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Scripture</h4>
                        </div>
                        <div class="col-md-10">
                            <p>
                                Each day you’ll read a few verses of scripture. You may want to read the full chapter in order to get a better context of what you are reading.  
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Silence</h4>
                        </div>
                        <div class="col-md-10">
                            <p>
                                Read over the selected verses 2-3 times slowly to marinate your heart in God’s words. Sit silently before the Lord and let the meaning of His words “dwell in your heart richly” (Colossians 3:16).  
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Spirit</h4>
                        </div>
                        <div class="col-md-10">
                            <p>
                                This section will provide the same four questions every day: Who is God? What has He done? Who are we?  What do we do? We are not going to do the work for you instead we want to train you to chew on God’s Word for yourself and with friends. Don’t be fooled by the simplicity of these questions. Wrestling the scriptures using these questions will actually be growing you in four critical areas:
                                    <dl>
                                        <dt>Theology</dt>
                                        <dd>The study of the nature and character of the Triune God.</dd>
                                        <dt>Christology</dt>
                                        <dd>The study of the nature and work of Jesus Christ.</dd>
                                        <dt>Ecclesiology</dt>
                                        <dd>The study of God's church &ndash; the redeemed people of God.</dd>
                                        <dt>Missiology</dt>
                                        <dd>The study of how we are to join God in what He is doing in the world.</dd>
                                    </dl>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Speak</h4>
                        </div>
                        <div class="col-md-10">
                            <p>
                                Now that you’ve listened to God through His Word and Spirit respond to Him. Remember, it’s about a real relationship with God through Christ not a religion. As you reflect back on what He’s revealed to you praise him. Confess where you have not trusted, believed, reflected or obeyed him. Celebrate who you are in Christ. Bring the needs, fears, and daily cares you have for you and your friends.  Offer your whole self to him as you go throughout your day. 
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Share</h4>
                        </div>
                        <div class="col-md-10">
                            <p>
                                We were never meant to follow Jesus alone. Each day, ask God to give you an opportunity to share what you are learning with those inside and outside His family. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>