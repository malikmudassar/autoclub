
<!------------ Video section ------------>
<section id="video-sec" class="parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video<small>All journeys have secret destinations of which the traveler is unaware.</small></h2>
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=AQ6GmpMu5L8" ><i class="fa fa-play"></i></a>
                <small><em>Video by: Paris Vacation Travel Guide | Expedia</em></small>
            </div>

        </div>
    </div>
</section>

<!------------ Menu section ------------>
<section id="location" class="parallax">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="1s">
                    <h2>Recently Joined <small>Following are the members who just Landed. Lets give them a warm welcome</small></h2>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp" data-wow-delay="0.5s">
                    <div class="media-object pull-left">
                        <img src="images/location-01.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Nadia, Rawalpindi</h3>
                        <p>I am doing Masters in Information Technology from Preston University Islamabad. I am here to make new friends, hangout with old ones and have fun</p>
                        <a href="#" class="btn btn-capsul btn-transparent-prime">Send Message</a>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.9s">
                    <div class="media-object pull-left">
                        <img src="images/location-02.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Hina Tariq, Lahore</h3>
                        <p>Working as Account Recovery Officer at Standard Chartered Bank. Live my life at full bloom, Always ready to make new friends and socialize. </p>
                        <a href="#" class="btn btn-capsul btn-transparent-prime">Send Message</a>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp" data-wow-delay="0.5s">
                    <div class="media-object pull-left">
                        <img src="images/location-03.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Mehreen, Islamabad</h3>
                        <p>I am a teacher at a Montessori School, Have done masters in health sciences. Life is really challenging, m here to meet like minded folks </p>
                        <a href="#" class="btn btn-capsul btn-transparent-prime">Send Message</a>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.9s">
                    <div class="media-object pull-left">
                        <img src="images/location-04.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Sehrish, Islamabad</h3>
                        <p>Oh you mean Fun! Seems like you are talking about my thing. I shop, dine-out and do all kind of stupidies youth is entitled to do so</p>
                        <a href="#" class="btn btn-capsul btn-transparent-prime">Send Message</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!------------ Contact section ------------>
<section id="contact-sec" class=" content">
    <div class="overlay"></div>
    <div class="container form-block">
        <?php if($this->session->flashdata('success')){?>

            <div class="container">
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success');?>
                </div>
            </div>

        <?php }?>
        <?php if($this->session->flashdata('error')){?>

            <div class="container">
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('error');?>
                </div>
            </div>

        <?php }?>
        <div class="row">
            <form action="" method="post">
            <div class="col-lg-12 text-center"><h2>Welcome Aboard<small>Drop your details to get Invite</small></h2></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" name="name" required/>
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
                        <span class="input_label-content input_label-content-hoshi">Name</span>
                    </label>
				</span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" name="phone" required/>
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
                        <span class="input_label-content input_label-content-hoshi">Phone</span>
                    </label>
				</span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="email" id="input-4" name="email" required />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
                        <span class="input_label-content input_label-content-hoshi">Email</span>
                    </label>
				</span>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <span class="t-area input-hoshi">
                <textarea class="input_field input_field-hoshi" rows="1" name="city" required></textarea>
						<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
                            <span class="input_label-content input_label-content-hoshi">City</span>
                        </label>
				</span>
                <button class="btn btn-capsul btn-transparent-white" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</section>