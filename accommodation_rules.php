<?php


use Elementor\Scheme_Color;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;


class AccommodationRules extends \Elementor\Widget_Base {
 	const TIME_SELECTOR = '{{WRAPPER}} .ee_time';
	const TIME_MARGIN_STYLE = 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};';
  	const ICON_COLOR_LABEL = 'رنگ آیکن';
	const ICON_STYLE = '{{WRAPPER}} .ee_time i';
   	const ICON_COLOR_RULE = 'color: {{VALUE}}';
	const TITLE_COLOR_LABEL = 'رنگ عنوان';
	const PADDING_LABEL = 'فاصله خارجی';
	const PADDING_TIME = '{{WRAPPER}} .ee_times',
	const RLICO = '{{WRAPPER}} .rlico',
	const RLITIT = '{{WRAPPER}} .rlitit',
	const RLDESC = '{{WRAPPER}} .rldesc',
	const MOHIYT ='{{WRAPPER}} .mohiyt',

	public function get_name() {
		return 'accommodation_rules';
	}

	public function get_title() {
		return 'قوانین اقامتگاه';
	}

	public function get_script_depends() {
		return [ 'jayto_script' ];
	}

	public function get_icon() {
		return 'dashicons dashicons-embed-generic';
	}

	public function get_categories() {
		return [ 'jayto' ];
	}


	protected function register_controls() {

		$this->style_tab();
	}

	private function styleTab() {
		$this->start_controls_section(
			'jt_role_time-style',
			[
				'label' => __( 'ساعت ورود و خروج ', 'jayto-Plugin' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]

		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'jt_role_time_border',
				'selector' => TIME_SELECTOR,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'jt_role_time_shadow',
				'selector' => TIME_SELECTOR,
			]
		);
		$this->add_control(
			'jt_role_time_radius',
			[
				'label' => esc_html__( 'انحنا', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					TIME_SELECTOR => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'jt_role_time_margin',
			[
				'label' => esc_html__( 'فاصله', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					TIME_SELECTOR => TIME_MARGIN_STYLE,
				],
			]
		);
		$this->add_control(
			'jt_role_time_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_timeicon_note',
			[
				'label' => esc_html__( 'استایل آیکن', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_control(
			'jt_role_timeicon_color',
			[
				'label' => esc_html__( ICON_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					ICON_STYLE => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_timeicon_width',
			[
				'label' => esc_html__( 'Width', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],

				],
				'default' => [
					'unit' => 'px',
					'size' => 25,
				],
				'selectors' => [
					ICON_STYLE => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'jt_role_timeicon_margin',
			[
				'label' => esc_html__( 'فاصله', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					ICON_STYLE => TIME_MARGIN_STYLE,
				],
			]
		);
		$this->add_control(
			'jt_role_time_title_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_time_title_note',
			[
				'label' => esc_html__( 'استایل عنوان', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'jt_role_time_title_typography',
				'selector' => '{{WRAPPER}} .ee_title',
			]
		);
		$this->add_control(
			'jt_role_time_title_color',
			[
				'label' => esc_html__( TITLE_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ee_title' => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_time_title_margin',
			[
				'label' => esc_html__( PADDING_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .ee_title' => TIME_MARGIN_STYLE,
				],
			]
		);
		$this->add_control(
			'jt_role_time_clock_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_time_clock_hr_note',
			[
				'label' => esc_html__( 'استایل زمان', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'jt_role_time_clock_typography',
				'selector' => PADDING_TIME,
			]
		);
		$this->add_control(
			'jt_role_time_clock_color',
			[
				'label' => esc_html__( TITLE_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					PADDING_TIME => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_time_clock_margin',
			[
				'label' => esc_html__( PADDING_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					PADDING_TIME => TIME_MARGIN_STYLE,
				],
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'jt_role_returnLow-style',
			[
				'label' => __( 'قوانین سایت ', 'jayto-Plugin' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]

		);
		$this->add_control(
			'jt_role_returnLow_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_returnLow_note',
			[
				'label' => esc_html__( 'قوانین استرداد', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_control(
			'jt_role_returnLow_icon_color',
			[
				'label' => esc_html__( ICON_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					RLICO => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLow_icon_width',
			[
				'label' => esc_html__( 'سایز آیکن', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],

				],
				'default' => [
					'unit' => 'px',
					'size' => 29,
				],
				'selectors' => [
					RLICO => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'jt_role_returnLow_icon_margin',
			[
				'label' => esc_html__( 'فاصله آیکن', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					RLICO => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'jt_role_returnLow_icon_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_returnLows_note',
			[
				'label' => esc_html__( 'عنوان', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'jt_role_returnLows_title_typography',
				'selector' => RLITIT,
			]
		);
		$this->add_control(
			'jt_role_returnLows_title_color',
			[
				'label' => esc_html__( TITLE_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					RLITIT => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLows_title_margin',
			[
				'label' => esc_html__( PADDING_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					RLITIT => TIME_MARGIN_STYLE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLowsDesc_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_returnLowsDesc_note',
			[
				'label' => esc_html__( 'توضیح', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'jt_role_returnLowsDesc_typography',
				'selector' => RLDESC,
			]
		);
		$this->add_control(
			'jt_role_returnLowsDesc_color',
			[
				'label' => esc_html__( TITLE_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					RLDESC => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLowsDesc_margin',
			[
				'label' => esc_html__( PADDING_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					RLDESC => TIME_MARGIN_STYLE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLowt_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'jt_role_returnLowt_hr_note',
			[
				'label' => esc_html__( 'مقررات', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,

			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'jt_role_returnLowt_hr_typography',
				'selector' =>MOHIYT,
			]
		);
		$this->add_control(
			'jt_role_returnLowt_hr_color',
			[
				'label' => esc_html__( TITLE_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mohiyt' => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLowt_hr_margin',
			[
				'label' => esc_html__( PADDING_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .mohiyt' =>TIME_MARGIN_STYLE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLowtIcon_color',
			[
				'label' => esc_html__( ICON_COLOR_LABEL, 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .resli' => ICON_COLOR_RULE,
				],
			]
		);
		$this->add_control(
			'jt_role_returnLowtIcon_width',
			[
				'label' => esc_html__( 'اندازه آیکن', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],

				],
				'default' => [
					'unit' => 'px',
					'size' => 22,
				],
				'selectors' => [
					'{{WRAPPER}} .resli' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
	}

	protected function render() {
		if ( ! isset ( $_GET['action'] ) ) {
			$residence_id = get_the_ID();
		} else {
			$residence_id = create_post_id();
		}
		global $post;
		$in_apm  = '';
		$out_apm = '';
		$meta    = get_post_meta( $post->ID, '_all_res_meta', false );

		$in_clock    = $meta[0]['in_clock'];
		$out_clock   = $meta[0]['out_clock'];
		$cancel_type = $meta[0]['cancel_type'];

		if ( $in_clock < 12 ) {
			$in_apm = 'قبل از ظهر';
		} elseif ( $in_clock == 12 ) {
			$in_apm = ' ظهر';
		} elseif ( $in_clock > 12 ) {
			$in_apm   = ' بعد از ظهر';
			$in_clock = $in_clock - 12;
		}

		if ( $out_clock < 12 ) {
			$out_apm = 'قبل از ظهر';
		} elseif ( $out_clock == 12 ) {
			$out_apm = ' ظهر';
		} elseif ( $out_clock > 12 ) {
			$out_apm   = ' بعد از ظهر';
			$out_clock = $out_clock - 12;
		}
		?>
        <div class="ee_time_box">
            <div class="ee_time">

                <i class="fa-thin fa-clock fa-2x"></i>
                <p class="ee_title"><?php echo _e('ساعت ورود','jayto') ?></p>
                <p class="ee_times"><?php echo $in_clock ?> (<?php echo $in_apm ?>)</p>
            </div>
            <div class="ee_time">
                <i class="fa-thin fa-clock fa-2x"></i>
                <p class="ee_title"><?php echo _e('ساعت خروج','jayto') ?></p>
                <p class="ee_times"><?php echo $out_clock ?> (<?php echo $out_apm ?>)</p>
            </div>

        </div>
        <span class="line_dash margin_tb40"></span>
        <div class="regulation_box">
        <div class="regulation_one">
            <div class="align_item">
                <i class="fa-regular fa-minus-circle fa-2x rlico"></i>
                <span class="fw700 fz16 rlitit"><?php echo _e('قوانین استرداد','jayto') ?></span>
            </div>

			<?php
			if ( $cancel_type == 'easy' ) {
				$easy_cancel = get_option( 'easy_cancel' );

				?>
                <p class="rldesc"><?php echo _e('از لحظه رزرو تا 1 روز قبل از تاریخ ورود کل مبلغ رزرو بازگشت داده می‌شود.','jayto') ?></p>
                <div class="cancel_reserv_box">
                    <h4> قوانین لغو رزرو</h4>
                </div>
                <div class="cancel_reserv_box">
                    <div class="crb_head">
                        <h4> قوانین لغو رزرو</h4>
                        <span class="cancel_box_close"><i class="fa fa-close"></i></span>
                    </div>
	                <?php
	                $one_day= 100 - $easy_cancel['easy_one_day_before_recive'];
	                ?>

                    <p class="cbz-t rldesc"> &nbsp  <?php echo _e('از لحظه رزرو تا 1 روز قبل از تاریخ ورود','jayto') ?>&nbsp;<?php echo  $one_day ?>   درصد مبلغ رزرو بازگشت داده می‌شود.</p>

                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_green"></span>
                            <span class="lbef_l bg_green"></span>
                            <span class="lbef_b bg_green"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10 "><?php echo _e('1 روز قبل از ورود مهمان','jayto') ?></span>
                            <span><?php echo _e('پرداخت کامل وجه به مهمان','jayto') ?></span>
                        </div>
                    </div>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_orang"></span>
                            <span class="lbef_l bg_orang"></span>
                            <span class="lbef_b bg_orang"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10"><?php echo _e('تا روز ورود مهمان','jayto') ?></span>
                            <span><?php echo $easy_cancel['easy_before_recive'] ?>٪ مبلغ شب اول  </span>
                        </div>
                    </div>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_red"></span>
                            <span class="lbef_l bg_red"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10"><?php echo _e('از روز ورود تا خروج مهمان','jayto') ?></span>
                            <span><?php echo $easy_cancel['easy_after_recive1'] ?>٪ <?php echo _e(' مبلغ شب‌های سپری شده','jayto') ?> + <?php echo $easy_cancel['easy_after_recive2'] ?>٪ مبلغ شب‌های باقیمانده</span>
                        </div>
                    </div>
                </div>
			<?php } elseif ( $cancel_type == 'medium' ) {?>

				  <p class="rldesc"><?php echo _e(' از لحظه رزرو تا 2 روز قبل از تاریخ ورود کل مبلغ رزرو بازگشت داده می‌شود.','jayto') ?></p>
                <div class="cancel_reserv_box">
                    <div class="crb_head">
                        <h4> قوانین لغو رزرو</h4>
                        <span class="cancel_box_close"><i class="fa fa-close"></i></span>
                    </div>
                    <p class="cbz-t rldesc"> <?php echo _e(' از لحظه رزرو تا 2 روز قبل از تاریخ ورود کل مبلغ رزرو بازگشت داده می‌شود.','jayto') ?></p>
                    <?php
                    $medium_cancel = get_option( 'medium_cancel' );

                    ?>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_green"></span>
                            <span class="lbef_l bg_green"></span>
                            <span class="lbef_b bg_green"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10 "><?php echo _e('2 روز قبل از ورود مهمان','jayto') ?></span>
                            <span><?php echo _e('پرداخت کامل وجه به مهمان','jayto') ?></span>
                        </div>
                    </div>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_orang"></span>
                            <span class="lbef_l bg_orang"></span>
                            <span class="lbef_b bg_orang"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10"><?php echo _e('تا روز ورود مهمان','jayto') ?></span>
                            <span><?php echo $medium_cancel['medium_before_recive'] ?>٪<?php echo _e('مبلغ شب اول','jayto') ?>  </span>
                        </div>
                    </div>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_red"></span>
                            <span class="lbef_l bg_red"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10"><?php echo _e('از روز ورود تا خروج مهمان','jayto') ?></span>
                            <span><?php echo $medium_cancel['medium_after_recive1'] ?>٪ <?php echo _e('مبلغ شب‌های سپری شده','jayto') ?> + <?php echo $medium_cancel['medium_after_recive2'] ?>٪ مبلغ شب‌های باقیمانده</span>
                        </div>
                    </div>
                </div>
			<?php } elseif ( $cancel_type == 'hard' ) {
				$hard_cancel = get_option( 'hard_cancel' );

				?>
                <p class="rldesc"><?php echo _e('از لحظه رزرو تا ۴ روز قبل از تاریخ ورود','jayto') ?> <?php echo $hard_cancel['hard_before_4day_recivee'] ?>٪ <?php echo _e('مبلغ شب اول و از لحظه رزرو تا ۴ روز قبل از تاریخ ورود','jayto') ?> <?php echo $hard_cancel['hard_4day_before_recive2'] ?>٪ مبلغ شب‌های باقیمانده کسر می‌گردد.</p>

                <div class="cancel_reserv_box">
                    <div class="crb_head">
                        <h4> <?php echo _e('قوانین لغو رزرو','jayto') ?></h4>
                        <span class="cancel_box_close"><i class="fa fa-close"></i></span>
                    </div>
                    <p class="cbz-t rldesc"><?php echo _e('از لحظه رزرو تا ۴ روز قبل از تاریخ ورود','jayto') ?> <?php echo $hard_cancel['hard_before_4day_recivee'] ?>٪ <?php echo _e('مبلغ شب اول و از لحظه رزرو تا ۴ روز قبل از تاریخ ورود','jayto') ?> <?php echo $hard_cancel['hard_4day_before_recive2'] ?>٪ مبلغ شب‌های باقیمانده کسر می‌گردد.</p>

                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_green"></span>
                            <span class="lbef_l bg_green"></span>
                            <span class="lbef_b bg_green"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10 "><?php echo _e('4 روز قبل از ورود مهمان','jayto') ?></span>
                            <span><?php echo $hard_cancel['hard_before_4day_recivee'] ?>٪ <?php echo _e('مبلغ شب اول','jayto') ?> + <?php echo $hard_cancel['hard_4day_before_recive2'] ?>٪ <?php echo _e('مبلغ شب‌های باقیمانده','jayto') ?></span>
                        </div>
                    </div>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_orang"></span>
                            <span class="lbef_l bg_orang"></span>
                            <span class="lbef_b bg_orang"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10"><?php echo _e('تا روز ورود مهمان','jayto') ?></span>
                            <span><?php echo $hard_cancel['hard_before_recive1'] ?>٪ <?php echo _e('مبلغ شب اول','jayto') ?> + <?php echo $hard_cancel['hard_before_recive2'] ?>٪ <?php echo _e('مبلغ شب‌های باقیمانده','jayto') ?></span>
                        </div>
                    </div>
                    <div class="cbc_item">
                        <div class="cbc_i ">
                            <span class="cbc_ic border_red"></span>
                            <span class="lbef_l bg_red"></span>
                        </div>
                        <div class="cbc_c">
                            <span class="mbt10"><?php echo _e('از روز ورود تا خروج مهمان','jayto') ?></span>
                            <span><?php echo $hard_cancel['hard_after_recive1'] ?>٪ <?php echo _e('مبلغ شب‌های سپری شده','jayto') ?> + <?php echo $hard_cancel['hard_after_recive2'] ?>٪ <?php echo _e('مبلغ شب‌های باقیمانده','jayto') ?></span>
                        </div>
                    </div>
                </div>
			<?php }
			?>

            <span class="mr30 com_cansel"><?php echo _e('توضیحات بیشتر','jayto') ?> <i class="fa fa-chevron-left"></i></span>
        </div>
        <div class="regulation_tow">
            <div class="align_item">

                <i class="fa-regular fa-home-user resli" ></i>&nbsp;
                <span class="fw700 fz16 mohiyt"><?php echo _e('مقررات اقامتگاه','jayto') ?></span>
            </div>
            <div class="rule_box">
				<?php
				$loy = $meta[0]['od_loyer'];

				if ( $loy = $meta[0]['od_loyer'] ) {
					foreach ( $loy as $row ) {
						$term = get_term_by('term_id', $row, 'loyer');
						$name = $term->name;
						?>
                        <div class="ac_rule">
                            <span class="dot_span fa fa-circle"></span>
                            <span class="fz13 col_gray"><?php echo $name ?></span>
                        </div>
					<?php }
				}
				?>


            </div>
        </div>

		<?php


	}

	protected function content_template() {

	}
}


\Elementor\Plugin::instance()->widgets_manager->register( new accommodation_rules() );

