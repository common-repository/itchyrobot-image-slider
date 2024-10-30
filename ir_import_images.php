

<div class="wrap">  

    <?php    echo "<h2>" . __( 'iTCHYROBOT Image Display Options', 'ir_trdom' ) . "</h2>"; ?>  

  

    

        <input type="hidden" name="ir_hidden" value="Y">  

<p><h2>Credits..</h2><br />

This plugin uses jquery 1.3.1

It is based on an excellent tutorial from <b> <br />http://www.queness.com</b>

</p>



<p><h2>Usage..</h2></p>        

<p>To use this control upload your images using the Wordpress media functionality.  In the Media Library edit the images you want to appear in the slider and change the caption to iTCHYROBOT_MediaSlider. <br/> On the page you would like the control to appear add <b><code>php echo ir_getImageSlider() </code> </b></p>

<p>

It is possible in version 1.0 to create different libraries for different pages. Simply upload the images you would like to load in the slider and set an appropriate caption.  On the page where you would like to include the slider add <b><code>php echo ir_getImageSlider('The name of your caption library') </code> </b>

</p>


<p><h2>Default library demo</h2> <br />

<?php echo ir_getImageSlider() ?>



</p>



<p>This is version 1.0 of this control. If you use it and like it drop me a line with any changes, upgrades or modifications to rob@itchyrobot.co.uk. </p>



        <!--<p class="submit">  

        <input type="submit" name="Submit" value="<?php _e('Update Options', 'ir_trdom' ) ?>" />  

        </p>-->  



</div>  





