<?php
/*
  Template Name: Project Landing Template
 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
    <br/>
    <style>
      .project-box {
        height: 400px;
        width: 310px;
        border: 1px solid #CCC;
        float: left;
        margin-left: 20px;
        margin-bottom: 25px;
      }
      .project-title {
        font-size: 130%;
        font-weight: bolder;
        text-align: center;
        border-bottom: 1px solid #CCC;
        padding-bottom: 8px;
        padding-top: 5px;
        background-color: #EEE;
      }
      .project-excerpt {
        padding: 8px;
      }
    </style>
    <?php
    $template = 'project';

    $args = array(
      'post_type'   => 'page', 
      'meta_key'    => '_wp_page_template', 
      'meta_value' => $template.'.php' 
    ); 

    $query = new WP_Query($args);

//   print "<pre>";
   //var_dump($query);
//   print "</pre>";

    add_filter('excerpt_more', 'excerpt_ellipse');
    function excerpt_ellipse($text) {
         //return str_replace('[...]', ' <a href="'.get_permalink().'">Continue...</a>', $text);
         return ' <a href="'.get_permalink().'">Discover Project...</a>';
    }
    while( $query->have_posts() ) : $query->the_post();
    ?>
    <div class="project-box <?php echo $class;?>">
      <div class="project-title">
        <a href="<?php the_permalink();?>">
        <?php the_title();?>
        </a>
      </div>
      <div class="project-excerpt">
        <?php the_excerpt('read more...'); ?>
      </div>
    </div>
    <?php
      $i++;
      if($i == 3) {
        $class = 'break';
      }

      //the_title();
      //the_excerpt();
    endwhile;
    ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
