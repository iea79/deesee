<div class="dayCounter">
    <div class="dayCounter__title"><?php echo SCF::get( 'counter__title' ); ?></div>
    <div class="dayCounter__content">
        <div class="dayCounter__col">
            <div class="dayCounter__label">Hours</div>
            <div class="dayCounter__count hours">00</div>
        </div>
        <div class="dayCounter__sep">:</div>
        <div class="dayCounter__col">
            <div class="dayCounter__label">Minutes</div>
            <div class="dayCounter__count minutes">12</div>
        </div>
        <div class="dayCounter__sep">:</div>
        <div class="dayCounter__col">
            <div class="dayCounter__label">Seconds</div>
            <div class="dayCounter__count seconds">34</div>
        </div>
    </div>
    <div class="dayCounter__sub"><?php echo strip_tags(SCF::get( 'counter__sub' ), '<b>, <strong>'); ?></div>
    <!-- <div id="ssa-widget"></div> -->
    <div class="auditForm">
        <?php echo do_shortcode( '[contact-form-7 id="2095" title="Audit form"]' ); ?>
    </div>
</div>
