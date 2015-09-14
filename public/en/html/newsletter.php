<!-- Newsletter -->
<section class="newsletter">
    <div class="container-fluid">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="newsletter__container">
                <h5 class="newsletter__title">Newsletter</h5>
                <p class="newsletter__description">Subscribe to get <br> our news and promotions</p>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="newsletter__form-container">
                <form class="newsletter__form" action="php/sendNewsletter.php" method="post" id="newsletter">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="newsletterName">Name</label>
                            <input type="text" class="form-control" id="newsletterName" name="newsletterName" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="newsletterEmail">Email</label>
                            <input type="email" class="form-control" id="newsletterEmail" name="newsletterEmail" placeholder="mail@yourdomain.com" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <input type="submit" value="Subscribe" name="submit" id="newsetterButton">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /newsletter -->
