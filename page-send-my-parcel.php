<?php
	/*
	 * Template Name: Send My Parcel
	 */
	get_header();

	$theParent = wp_get_post_parent_id(get_the_ID());

	//while(have_posts()) {
    the_post(); ?>
<main id="main-content" style="margin-bottom: 50px;">
	<!-- [S] #contact -->
    <div class="container-fluid" style="padding-top: 50px; padding-left:100px ">
		<section class="col-lg-3" id="send-my-parcel-left">
				<i class="fas fa-pencil-alt fa-3x"></i>
		<div class="row">
			<h2 style="font-weight: 500; display: inline-block">Send My</h2><h2 style="display: inline;"> Parcel</h2>
            <h5>To send a parcel, get a quote below and then complete the form.
                A member of our team will contact you during working hours to complete the booking,take payment and issue the shipping labels.
            </h5>
		</div>
		</section>
		<section class="col-lg-8" id="send-my-parcel-right">
			<div class="row">
                <?php the_content() ?>
            </div>
            <div class="row" style="padding-right: 15px; padding-left: 15px;">
                <p>If you Require more urgent assistance please call 01753 683700 during working hours Mon-Fri.</p>
                <p>Bookings submitted ouside working hours will recieve a call back between 0900-1100 on the following working day</p>
            </div>
            <div class="row" style="padding-right: 15px; padding-left: 15px;">
                <h4>What happens next?</h4>
                <p>
                    Once you have completed the booking screen above, we will call you back to complete payment for the booking, email your labels and arrange collection or or drop off of your parcel.
                </p>
                <p>
                     Collections :You will be required to print off two labels and one customs invoice, if you do not have access to a printer we can arrange a label free collection at an additional cost of £12.50 + vat (for a single item upto 20kg).
                 </p>
                 <p>
                    Drop off: You can drop your parcel to your local Parcelshop, you will need to print two labels.  
                 </p>
                 <p>
                    Whilst the shipment is in transit we will email you tracking updates until the shipment is delivered.
                    Once this booking is completed your account will be open and you will be free to send as many parcels as you wish through the online booking portal.
                </p>
            </div>
		</section>
	</div>
</main>
<?php //}
	get_footer();
?>