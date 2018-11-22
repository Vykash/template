<!--FOOTER CON SVG DECORATIVO-->
    <footer id="main-footer">
        <div class="footer-triangle">

            <svg height="100%" width="100%">
            <polygon points="0,500 0,210 0,300"/>
                Sorry, your browser does not support inline SVG
            </svg>


        </div>
<div class="footer-box bg_black">
            <div class="container_large footer-cont">
                <div class="f-center-col">
                    <div class="logo footer-logo color_white">
                        QU<br>SQ
                    </div>
                    <div class="color_white">
                        <h3>Unique Portfolio</h3>
                    </div>
                    <div class="social-logos">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-behance"></i>
                        <i class="fab fa-dribbble"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    
                    
                        <?php dynamic_sidebar('copyright')?>
                    
                    
                </div>
                <div class="f-small-col">
                    <div class="rotateWrapper">
                        <div class="rotate90">
                            <div class="color_white top-btn">Back to Top <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="loader"></div>



    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>  
    <script type="text/javascript" src="<?=get_template_directory_uri()?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>