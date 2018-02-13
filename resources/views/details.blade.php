@extends('layout.app')

@section('content')
<!-- BEGIN PROPERTY DETAILS-->

<?php 
 foreach($details as $value){ ?>
<div class="property">
  <h1 class="property__title">1600 Pennsylvania Ave NW<span class="property__city">Washington DC20500, Collingswood, USA 21050</span></h1>
  <div class="property__header">
    <div class="property__price"><strong class="property__price-value">$2,399,900</strong><span class="property__price-label">Inclusive TVA</span></div>
    <h4 class="property__commision">Commision: <strong>3%</strong></h4>
    <div class="property__actions">
      <button type="button" class="btn--default"><i class="fa fa-refresh"></i>Update status</button>
      <button type="button" class="btn--default"><i class="fa fa-star"></i>Add to favorites</button>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="property__slider">
    <div class="property__ribon">For rent</div>
    <div class="property__ribon property__ribon--status property__ribon--done">transaction-related</div>
    <div id="properties-thumbs" class="slider slider--small js-slider-thumbs">
      <div class="slider__block js-slick-slider">
        <div class="slider__item slider__item--0">
          <a href="assets/media-demo/properties/1740x960/01.jpg" data-size="1740x960" data-gallery-index='0' class="slider__img js-gallery-item">
          <?php 
                if ($value->photo_1 == null) { ?>
                  <img data-lazy="assets/media-demo/properties/1740x960/01.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">
                <?php }else{ ?>
                  <img data-lazy="assets/media-demo/properties/1740x960/<?php echo $value->photo_1 ?>" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">
                <?php }
              ?>
          
          <?php echo $value->description ?></span></a></div>
        <div class="slider__item slider__item--1"><a href="assets/media-demo/properties/1740x960/02.jpg" data-size="1740x960" data-gallery-index='1' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/02.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">2</span></a></div>
        <div class="slider__item slider__item--2"><a href="assets/media-demo/properties/1740x960/03.jpg" data-size="1740x960" data-gallery-index='2' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/03.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">3</span></a></div>
        <div class="slider__item slider__item--3"><a href="assets/media-demo/properties/1740x960/04.jpg" data-size="1740x960" data-gallery-index='3' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/04.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">Ok</span></a></div>
        <div class="slider__item slider__item--0"><a href="assets/media-demo/properties/1740x960/05.jpg" data-size="1740x960" data-gallery-index='4' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/05.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">5</span></a></div>
        <div class="slider__item slider__item--1"><a href="assets/media-demo/properties/1740x960/09.jpg" data-size="1740x960" data-gallery-index='5' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/09.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">6</span></a></div>
        <div class="slider__item slider__item--2"><a href="assets/media-demo/properties/1740x960/06.jpg" data-size="1740x960" data-gallery-index='6' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/06.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">7</span></a></div>
        <div class="slider__item slider__item--3"><a href="assets/media-demo/properties/1740x960/07.jpg" data-size="1740x960" data-gallery-index='7' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/07.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">8</span></a></div>
        <div class="slider__item slider__item--0"><a href="assets/media-demo/properties/1740x960/08.jpg" data-size="1740x960" data-gallery-index='8' class="slider__img js-gallery-item"><img data-lazy="assets/media-demo/properties/1740x960/08.jpg" src="assets/img/lazy-image.jpg" alt=""><span class="slider__description">The end</span></a></div>
      </div>
    </div>
    <div class="slider slider--thumbs">
      <div class="slider__wrap">
        <div class="slider__block js-slick-slider">
          <div data-slide-rel='0' class="slider__item slider__item--0">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/01.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='1' class="slider__item slider__item--1">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/02.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='2' class="slider__item slider__item--2">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/03.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='3' class="slider__item slider__item--3">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/04.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='4' class="slider__item slider__item--0">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/05.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='5' class="slider__item slider__item--1">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/09.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='6' class="slider__item slider__item--2">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/06.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='7' class="slider__item slider__item--3">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/07.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
          <div data-slide-rel='8' class="slider__item slider__item--0">
            <div class="slider__img"><img data-lazy="assets/media-demo/properties/277x180/08.jpg" src="assets/img/lazy-image.jpg" alt=""></div>
          </div>
        </div>
        <button type="button" class="slider__control slider__control--prev js-slick-prev">
          <svg class="slider__control-icon">
            <use xlink:href="#icon-arrow-left"></use>
          </svg>
        </button>
        <button type="button" class="slider__control slider__control--next js-slick-next">
          <svg class="slider__control-icon">
            <use xlink:href="#icon-arrow-right"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div class="property__info">
    <div class="property__info-item">Property type: <strong> Apartment</strong></div>
    <div class="property__info-item">Built Up: <strong> 265 Sq Ft</strong></div>
    <div class="property__info-item">Date: <strong> 11/03/2016</strong></div>
    <div class="property__info-item">Land Size: <strong> 100 Sq Ft</strong></div>
  </div>
  <div class="property__plan">
    <dl class="property__plan-item">
      <dt class="property__plan-icon">
        <svg>
          <use xlink:href="#icon-area"></use>
        </svg>
      </dt>
      <dd class="property__plan-title">Area</dd>
      <dd class="property__plan-value">120</dd>
    </dl>
    <dl class="property__plan-item">
      <dt class="property__plan-icon property__plan-icon--window">
        <svg>
          <use xlink:href="#icon-window"></use>
        </svg>
      </dt>
      <dd class="property__plan-title">Bedrooms</dd>
      <dd class="property__plan-value">5</dd>
    </dl>
    <dl class="property__plan-item">
      <dt class="property__plan-icon property__plan-icon--bathrooms">
        <svg>
          <use xlink:href="#icon-bathrooms"></use>
        </svg>
      </dt>
      <dd class="property__plan-title">Bathrooms</dd>
      <dd class="property__plan-value">3</dd>
    </dl>
    <dl class="property__plan-item">
      <dt class="property__plan-icon">
        <svg>
          <use xlink:href="#icon-bedrooms"></use>
        </svg>
      </dt>
      <dd class="property__plan-title">Beds</dd>
      <dd class="property__plan-value">2</dd>
    </dl>
    <dl class="property__plan-item">
      <dt class="property__plan-icon property__plan-icon--garage">
        <svg>
          <use xlink:href="#icon-garage"></use>
        </svg>
      </dt>
      <dd class="property__plan-title">Garages</dd>
      <dd class="property__plan-value">0</dd>
    </dl>
  </div>
  <div class="property__params">
    <h4 class="property__subtitle">The space</h4>
    <ul class="property__params-list">
      <li>Year Built:<strong>1971</strong></li>
      <li>Number of Parking Spaces:<strong>24</strong></li>
      <li>Garage Size In Square Feet:<strong>50</strong></li>
      <li>Basement:<strong>Full</strong></li>
      <li>External<strong>Construction: Terace</strong></li>
      <li>Roofing:<strong>New</strong></li>
      <li>Exterior Material:<strong>Brick</strong></li>
      <li>Structure Type:<strong>Mansion</strong></li>
      <li>Doors &amp; windows:<strong>Double Pane Windows, Skylights</strong></li>
      <li>Fireplace description:<strong> Brick</strong></li>
      <li>Fireplace fuel:<strong>Uses Both Gas &amp; Wood</strong></li>
      <li>Fireplace location:<strong>Living Room</strong></li>
      <li>Floors:<strong>Carpet - Partial, Ceramic Tile</strong></li>
      <li>Plumbing:<strong>Full Copper Plumbing/</strong></li>
      <li>Garage Size In Square Feet:<strong>500</strong></li>
      <li>Basement:<strong>Full</strong></li>
      <li>Available From:<strong>2013-05-29</strong></li>
      <li>MLS ID #:<strong>0</strong></li>
    </ul>
  </div>
  <div class="property__params">
    <h4 class="property__subtitle">Amenities</h4>
    <ul class="property__params-list property__params-list--options">
      <li>Wireless Internet</li>
      <li>Kitchen</li>
      <li>Internet</li>
      <li>Air Conditioning</li>
      <li>Heating</li>
      <li>Smoking Allowed</li>
      <li>Wheelchair Accessible</li>
      <li>Washer</li>
      <li>Dryer</li>
      <li>TV</li>
      <li>Suitable for Events</li>
      <li>Smoking Allowed</li>
      <li>Wheelchair Accessible</li>
      <li>Elevator in Building</li>
      <li>Indoor Fireplace</li>
      <li>Buzzer/Wireless Intercom</li>
      <li>Doorman</li>
      <li>Pool</li>
      <li>Hot Tub</li>
      <li>Gym</li>
    </ul>
  </div>
<?php } ?>
  <div class="property__description js-unhide-block">
    <h4 class="property__subtitle">Description</h4>
    <div class="property__description-wrap">
      <p>Center of the Meatpacking district. Spacious room with queen Sized bed, Large desk and lots of windows and light. In a large apt with huge private outdoor patio! (Very rare in the city) washer dryer/ Gourmet kitchen. Close to the city&apos;s best night clubs, restaurants and shopping</p>
      <p>This is a spacious private room for rent in my Large 2 bedroom apt with large outdoor patio suitable for eating in the heart of the Meat-Packing District. right across the street from the chelsea market and just steps away from the cites best shopping, restaurants, and night-life</p>
      <p>
        The apartment is newly renovated with brand new furniture and appliances. It&apos;s a clean and cozy oasis in the coolest neighborhood in nyc.
        The private outdoor patio is huge and has a covered eating area, a gas Webber BBQ , 2 lounge chairs for sunbathing and plenty of space to just hang out.
      </p>
      <p>The bedroom has a queen-sized bed that sleeps 2 and a large desk, a 32 inch flatscreen cable/tv, with 3 large windows overlooking the posh area we call the meatpacking district.</p>
      <p>
        The bathroom has a shower/tub (perfect for soaking) with sliding glass doors. (towels and bedding provided)
        Living room has a new huge leather sectional couch that comfortably holds 5 for movies/meals or just hanging.There is a brand new 42&quot; flat screen TV mounted on the wall. with playstation 3, dvd, and free cable TV w DVR.
        this apartment also has a dj booth for anyone that is experienced. or an iPod dock for ppl that just want to play music that way
        The kitchen is very large with black marble counter tops,and bar to eat and hang out. It has all the appliances you&apos;ll need including trash compactor, dishwasher, stove/over, toaster, blender and enough space for a chef and several helpers. Air conditioning. And yes, the apartment does have free wireless Internet access.
      </p>
    </div>
    <button type="button" class="property__btn-more js-unhide">More information ...</button>
  </div>
  <div class="widget js-widget widget--details">
    <div class="widget__content">
      <div class="map map--properties">
        <div class="map__buttons">
          <button type="button" class="map__change-map js-map-btn active">Property Map</button>
          <button type="button" class="map__change-panorama js-panorama-btn">Street view</button>
        </div>
        <div class="map__wrap">
          <div data-type="map" class="map__view js-map-canvas"></div>
          <div data-type="panorama" class="map__view map__view--panorama js-map-canvas"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="widget js-widget widget--details">
    <div class="widget__content">
      <div data-sr="enter bottom move 80px, scale(0), over 0s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--list worker--details">
        <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo"/>
          <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a></div>
          <div class="worker__intro">
            <div class="worker__intro-head">
              <div class="worker__intro-name">
                <h3 class="worker__name fn">Christopher Pakulla</h3>
                <div class="worker__post">Realtor, West USA Realty</div>
              </div>
              <div class="worker__intro-brand"><a class="worker__company"><img src="assets/media-demo/partners/logo-company-proera.png" alt="pro"/></a>
                <div class="worker__company-name">Pro Era West Realty</div>
              </div>
              <!-- end of block .worker__listings-->
            </div>
            <button type="button" class="worker__show js-unhide">Contact agent</button>
            <div class="worker__intro-row">
              <div class="worker__intro-col">
                <div class="worker__contacts">
                  <div class="tel"><span class="type">Tel.</span><a href="tel:+44(0)2035102390" class="uri value">+44 (0) 20 3510 2390</a></div>
                  <div class="tel"><span class="type">Mob.</span><a href="tel:+44(0)30345207210" class="uri value">+44 (0) 303 4520 7210</a></div>
                  <div class="email"><span class="type">Email</span><a href="mailto:rs@realtyspace.com" class="uri value">rs@realtyspace.com</a></div>
                  <div class="skype"><span class="type">Skype</span><a href="skype:Walkenboy?call" class="uri value">Walkenboy</a></div>
                </div>
                <!-- end of block .worker__contacts-->
              </div>
              <div class="worker__intro-col">
                <div class="social social--worker"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-linkedin"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
              </div>
            </div>
            <div class="worker__intro-row">
              <div class="worker__descr">
                <p>
                  I&apos;m an entrepreneur who loves to travel and splits time between New York and Los Angeles. Believer in the golden rule: Do unto others as you would have them do unto you. Favorite destinations include Cabo San Lucas, Costa Rica, Turks &amp; Caicos...sunny beaches are ideal vacation spots
                  We recognize you have a choice when it comes to working with a real estate professional. We look forward to earning your trust and helping you discover the smarter way to buy or sell a home.
                </p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end of block .worker-->
        <form action="contact" method="GET" class="form form--flex form--property-agent js-contact-form form--properties">
          <div class="row">
            <div class="form-group form-group--col-4 required">
              <label for="in-form-name" class="control-label">Your Name</label>
              <input id="in-form-name" type="text" name="name" required class="form-control">
            </div>
            <div class="form-group form-group--col-4">
              <label for="in-form-phone" class="control-label">Telephone</label>
              <input id="in-form-phone" type="text" name="phone" class="form-control">
            </div>
            <div class="form-group form-group--col-4 required">
              <label for="in-form-email" class="control-label">E-mail</label>
              <input id="in-form-email" type="email" name="email" required data-parsley-trigger="change" class="form-control">
            </div>
            <div class="form-group required">
              <label for="in-form-message" class="control-label">Message</label>
              <textarea id="in-form-message" name="message" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment.." class="form-control"></textarea>
            </div>
          </div>
          <div class="row">
            <button type="submit" class="form__submit">Submit</button>
          </div>
        </form>
        <!-- end of block form-->
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  @endsection