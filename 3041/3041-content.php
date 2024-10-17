<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3041">

<section class="faq-section container">
    <div class="row">
        <div class="col-md-7 faq mx-5">
            <h2>
                <i class="fa fa-wrench mx-5" aria-hidden="true"></i>
            </h2>
            <h2>Read FAQ's</h2>
            <p><span class="highlight">Your all</span> questions are answered here about our services.</p>
            
            <div class="faq-item">
                <h3>
                    <button class="btn-toggle" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                        How many days it’ll take to repair broken screen?
                        <span class="icon-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </button>
                </h3>
                <div id="faq1" class="collapse">
                    <p>Content of the FAQ answer goes here...</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>
                    <button class="btn-toggle" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
                        Which types of smartphones you unlock? 
                        <span class="icon-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </button>
                </h3>
                <div id="faq2" class="collapse">
                    <p>Elit sed uao eiusmod tempor incididunt ut labore et dolore magna aliqua uat enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>
                    <button class="btn-toggle" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
                        Will I lose my personal data while repair phone? 
                        <span class="icon-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </button>
                </h3>
                <div id="faq3" class="collapse">
                    <p>No, we take measures to ensure your data remains intact during repair.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>
                    <button class="btn-toggle" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
                        What is the Product Guarantee? 
                        <span class="icon-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </button>
                </h3>
                <div id="faq4" class="collapse">
                    <p>We offer a 6-month warranty for all repairs and replaced parts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 contact-form">
            <h2>Do you still have more questions? Send us!</h2>
            <form action="#">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="text" placeholder="Your Subject" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send</button>
            </form>
            <p class="contact-number">or Call Now 1 623 457 9820</p>
        </div>
    </div>
</section>
</div>
