<?php
namespace Elementor;

class My_Widget_1 extends Widget_Base {
	
	public function get_name() {
		return 'title-subtitle';
	}
	
	public function get_title() {
		return 'Shop List';
	}
	
	public function get_icon() {
		return 'fa fa-store';
	}
	
	public function get_categories() {
		return [ 'basic' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);
		
		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your title', 'elementor' ),
			]
		);

		$this->add_control(
			'limit',
			[
				'label' => __( 'Limit', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter post limt', 'elementor' ),
			]
		);

		

		$this->end_controls_section();
	}
	
	protected function render() {

      $settings = $this->get_settings_for_display();
    query_posts(array( 
        'post_type' => 'listing',
		'order'=> 'DESC',
        'showposts' => $settings['limit'] 
    ) );  
	$out='';
	while (have_posts()) : the_post();
        $out .= '<div class="one_third">';
			$out .= '<div style="padding:10px">';
				if( has_post_thumbnail($post->ID)){
				 $out .='<figure>'. atp_resize( $post->ID, '',$width, $height, '', $img_alt_title ) .'</figure>'; 
				}
				$out .='<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
				$out .='<p>'.get_the_content().'</p>';
			   
				$out .='<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Request A Quote</button>';
			$out .= '</div>';
		$out .='</div>';
	endwhile;
	$out .= get_the_posts_pagination( array(
	'mid_size' => 2,
	'prev_text' => __( 'Back', 'textdomain' ),
	'next_text' => __( 'Onward', 'textdomain' ),
) );
	wp_reset_query();
	$out.='<div id="myModal" class="modal fade" role="dialog" style="display:none">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">'.do_shortcode('[contact-form-7 id="87" title="Quick quote"]').'</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>';
	echo $out;
	}
	protected function _content_template() {

    }
}
?>
