<?php
/**
 * Template Name: Facutly
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wsu_surgery
 */

get_header(); 

//get_template_part('template-parts/page-title'); 

?>

<!-- Banner -->
    <section class="cp-hero">
        <div class="container">
            <h1>Meeting our Faculty.</h1>
        </div>
    </section>
    <!-- #banner ends -->

    <!-- Main Content -->
    <div class="page-content">
    <div class="container surg-body">
        <div class="row">
            <!-- Sidebar -->
            <?php get_sidebar( 'faculty' ); ?> 
            <!-- End Sidebar -->
            <!-- Main Content Column -->
            <div class="col-sm-7 col-md-8 surg-content faculty">
                <div id="main_content">
                    <div class="row preamble">
                        <div class="col-md-3">
                            <!--<img class="picture" src="src/img/dweaver.jpg" alt="">-->
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            ?>
                                <img class="picture" src="<?php echo the_post_thumbnail_url(); ?>">
                            <?php }
                            ?>
                        </div>
                        <div class="col-md-9">
                            <h1 class="doc-name">
                                <?php the_field( "faculty_name" ); ?>
                            </h1>
                            <div class="pa-info">
                                <div class="col-md-6">
                                    <?php the_field( "faculty_info_left" ); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field( "faculty_info_right" ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row trailer">
                        <div class="col-md-12">
                            <div class="top">
                                <ul id="faculty-tablist" role="tablist">
                                    <li class="active">
                                        <a class="btn btn-green" href="#tpane_clinical_info">Clinical Info</a></li>
                                    <li>
                                        <a class="btn btn-dark-white" href="#tpane_teaching">Teaching</a></li>
                                    <li>
                                        <a class="btn btn-dark-white" href="#tpane_edu_detail">Education Detail</a></li>
                                    <li><a class="btn btn-dark-white" href="#tpane_pub">Publications</a></li>
                                    <li><a class="btn btn-dark-white" href="#tpane_contact">Contact</a></li>
                                </ul>


                                <!--<ul class="" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                                </ul>-->



                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content bottom">
                                
                                <div role="tabpanel" class="tab-pane active" id="tpane_clinical_info">
                                    <?php the_field( "tpane_clinical_info" ); ?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tpane_teaching">
                                    <?php the_field( "tpane_teaching" ); ?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tpane_edu_detail">
                                    <?php the_field( "tpane_edu_detail" ); ?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tpane_pub">
                                    <?php the_field( "tpane_pub" ); ?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tpane_contact">
                                    <?php the_field( "tpane_contact" ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    </div>








            <?php
get_footer();