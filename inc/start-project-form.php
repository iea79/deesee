<?php
add_shortcode('start_project', 'start_project');
/**
 * Шорткод вывода формы
 *
 * @return string
 * @see https://wpruse.ru/?p=3224
 */
function start_project()
{

	ob_start();
?>
	<!-- Button trigger modal startProject -->
	<!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#startProject">
	        Посмотреть демо
	      </button> -->

	<!-- begin Modal startProject -->
	<div class="modal fade startProject" id="startProject">
		<div class="modal-dialog">
			<div class="modal-content">
				<a href="#" class="modal-close" data-dismiss="modal"></a>
				<form class="startProject__steps">
					<input type="checkbox" name="agree" class="agree" value="Yes" checked>
					<input type="hidden" name="subject" value="Website Questionnaire">
					<input type="hidden" name="form_title" value="Website Questionnaire form">
					<input type="hidden" name="page_name" value="<?php echo get_the_title(); ?>">
					<div class="startProject__head">
						<div class="startProject__info">Complete the survey and get the cost of the site</div>
						<div class="startProject__counter">1/10</div>
					</div>
					<div class="startProject__body">
						<!-- Step 1 -->
						<div class="startProject__step active" data-step="1">
							<div class="startProject__title">Which website do you need?</div>
							<div class="startProject__form">
								<label class="startProject__col checked">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1751, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step1" value="One-paged" checked>
										<span>One-paged</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1750, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step1" value="Many Paged">
										<span>Many Paged</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1749, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step1" value="eCommerce">
										<span>eCommerce</span>
									</span>
								</label>
							</div>
						</div>
						<!-- Step 2 -->
						<div class="startProject__step" data-step="2">
							<div class="startProject__title">2. Do you have a corporate identity?</div>
							<input type="hidden" name="uploaded" value="">
							<div class="startProject__form">
								<label class="startProject__col checked">
									<span class="startProject__check">
										<input type="radio" name="step2" value="yes">
										<span>Yes</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__check">
										<input type="radio" name="step2" value="no" checked>
										<span>No</span>
									</span>
								</label>
								<label class="dropArea disable" id="drop-area">
									<i class="dropArea__icon">
										<svg preserveAspectRatio="none" class="progress-ring" viewBox="0 0 55 55">
											<circle class="progress-ring__circle" stroke="#AFABA4" stroke-width="2" fill="transparent" r="26" cx="28" cy="28" />
										</svg>
										<span class="dropArea__percent"></span>
									</i>
									<p class="dropArea__text">Drag and drop files, or Browse</p>
									<span class="dropArea__notiff">Support: zip, png, jpg, pdf files</span>
									<input type="file" id="file" name="file" multiple accept=".zip, .png, .jpg, .jpeg, .pdf" disabled>
								</label>
							</div>
						</div>
						<!-- Step 3 -->
						<div class="startProject__step gender" id="gender" data-step="3">
							<div class="startProject__title">3. What is your target audience?</div>
							<input type="hidden" name="ages" value="">
							<div class="startProject__label"></div>
							<div class="startProject__form gender__toggle">
								<label class="startProject__row checked">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1757, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" name="male" checked value="male">
										<span>Male</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1756, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" name="female" value="female">
										<span>Female</span>
									</span>
								</label>
							</div>
							<div class="startProject__label"></div>
							<div class="startProject__form gender__plate">
								<label class="startProject__row active" data-gender="male">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1755, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="male 20-30">
										<span>20-30 age</span>
									</span>
								</label>
								<label class="startProject__row" data-gender="female">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1784, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="female 20-30">
										<span>20-30 age</span>
									</span>
								</label>
								<label class="startProject__row active" data-gender="male">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1754, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="male 30-40">
										<span>30-40 age</span>
									</span>
								</label>
								<label class="startProject__row" data-gender="female">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1783, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="female 30-40">
										<span>30-40 age</span>
									</span>
								</label>
								<label class="startProject__row active" data-gender="male">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1753, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="male 40-50">
										<span>40-50 age</span>
									</span>
								</label>
								<label class="startProject__row" data-gender="female">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1782, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="female 40-50">
										<span>40-50 age</span>
									</span>
								</label>
								<label class="startProject__row active" data-gender="male">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1752, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="male 60+">
										<span>60+ age</span>
									</span>
								</label>
								<label class="startProject__row" data-gender="female">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1781, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="checkbox" value="female 60+">
										<span>60+ age</span>
									</span>
								</label>
							</div>
						</div>
						<!-- Step 4 -->
						<div class="startProject__step" data-step="4">
							<div class="startProject__title">4. Which style do you like?</div>
							<div class="startProject__form">
								<label class="startProject__col checked">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1761, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step4" value="Minimalist" checked>
										<span>Minimalist</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1760, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step4" value="Many graphics">
										<span>Many graphics</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1759, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step4" value="Illustrative">
										<span>Illustrative</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1758, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step4" value="3D">
										<span>3D</span>
									</span>
								</label>
							</div>
						</div>
						<!-- Step 5 -->
						<div class="startProject__step" data-step="5">
							<div class="startProject__title">5. What color palette do you like?</div>
							<div class="startProject__form">
								<label class="startProject__col checked">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1764, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step5" value="Light" checked>
										<span>Light</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1763, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step5" value="Dark">
										<span>Dark</span>
									</span>
								</label>
								<label class="startProject__col">
									<span class="startProject__img">
										<?php echo wp_get_attachment_image(1762, 'full') ?>
									</span>
									<span class="startProject__check">
										<input type="radio" name="step5" value="Bright">
										<span>Bright</span>
									</span>
								</label>
							</div>
						</div>
						<!-- Step 6 -->
						<div class="startProject__step" data-step="6">
							<div class="startProject__title">6. Which emotions should the website evoke?</div>
							<input type="hidden" name="emotions" value="">
							<div class="startProject__form">
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-1" value="Confidence">
										<span>Confidence</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-2" value="Seriousness">
										<span>Seriousness</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-3" value="Luxury">
										<span>Luxury</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-4" value="Freshness">
										<span>Freshness</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-5" value="Femininity (tenderness/softness)">
										<span>Femininity (tenderness/softness)</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-6" value="Contemporaneity">
										<span>Contemporaneity</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-7" value="Modernity">
										<span>Modernity</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-8" value="Conventionality">
										<span>Conventionality</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-9" value="Traditionality">
										<span>Traditionality</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-10" value="Innovativeness">
										<span>Innovativeness</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-11" value="Joy, ingenuousness">
										<span>Joy, ingenuousness</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-12" value="Creativity">
										<span>Creativity</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-13" value="Energy">
										<span>Energy</span>
									</span>
								</label>
								<label class="startProject__row">
									<span class="startProject__check">
										<input type="checkbox" name="step6-14" value="Peace of mind">
										<span>Peace of mind</span>
									</span>
								</label>
							</div>
						</div>
						<!-- Step 7 -->
						<div class="startProject__step" data-step="7">
							<div class="startProject__title">7. Who are your main competitors?</div>
							<div class="startProject__sub">Include links to their websites or write the names of the companies</div>
							<div class="startProject__form">
								<textarea name="step7" placeholder="Start typing"></textarea>
							</div>
						</div>
						<!-- Step 8 -->
						<div class="startProject__step" data-step="8">
							<div class="startProject__title">8. Comments & Wishes</div>
							<div class="startProject__sub">Write what you would like to see on your website</div>
							<div class="startProject__form">
								<textarea name="step8" placeholder="Start typing"></textarea>
							</div>
						</div>
						<!-- Step 9 -->
						<div class="startProject__step" data-step="9">
							<div class="startProject__title">9. Best desired launch date</div>
							<div class="startProject__sub">Write the dates on which you want to launch the website</div>
							<div class="startProject__form">
								<textarea name="step9" placeholder="Start typing"></textarea>
							</div>
						</div>
						<!-- Step 10 -->
						<div class="startProject__step" data-step="10">
							<div class="startProject__title">10. Contact information</div>
							<div class="startProject__sub">Leave your contact information so we can contact you</div>
							<div class="startProject__form">
								<div class="startProject__fields">
									<div class="form__row">
										<input type="text" name="first-name" placeholder="First name" required>
									</div>
									<div class="form__row">
										<input type="text" name="last-name" placeholder="Last name" required>
									</div>
									<div class="form__row">
										<input type="email" name="email" placeholder="E-mail" required>
									</div>
									<div class="form__row">
										<input type="tel" name="phone" placeholder="Phone" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="startProject__footer">
						<div class="startProject__err"></div>
						<button class="btn btn_back" type="button">Back</button>
						<button class="btn btn_next" type="button">Next</button>
						<button class="btn btn_send" type="submit">Send</button>
					</div>
					<div class="startProject__loader">
						<div class="loader"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end Modal startProject -->
<?php

	return ob_get_clean();
}
