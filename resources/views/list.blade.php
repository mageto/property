@extends('layout.app')

@section('content')
<header class="site__header">
	<h1 class="site__title"><span class="title-thin">Agent</span> Profile/Property</h1>
	<h2 class="site__headline">Christopher’s Profile</h2>
</header>
<div class="site__panel"><span class="site__header-text">An Agent Profile is your free profile page that enables you to build your personal brand and demonstrate your skills to potential Vendors and Landlords to attract your next site.</span></div>
<div class="site__main">
	<div class="widget js-widget widget--main">
		<div class="widget__content">
			<div class="listing listing--list js-properties-list">

					<?php 
                    foreach($property as $value){ ?>
				<div class="listing__item">
					<div class="properties properties--list">
						<div class="properties__thumb">
							<a href="property_details.html" class="item-photo">
							<?php 
								if ($value->photo_1 == "") { ?>
									<img src="assets/media-demo/properties/554x360/01.jpg" alt=""/>
								<?php }else{ ?>
									<img src="assets/media-demo/properties/554x360/<?php echo $value->photo_1 ?>" alt=""/>
								<?php }
							?>
							
							<figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 165 Sq Ft</span><span class="properties__params">Land Size - 210 Sq Ft</span><span class="properties__time">Added date: 2 days ago</span>
							</figure></a><span class="properties__ribon">For sale</span>
						</div>
						<!-- end of block .properties__thumb-->
						<div class="properties__details">
							<div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 West Martin Boulevard</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a>
								<div class="properties__offer">
									<div class="properties__offer-column">
										<div class="properties__offer-label">Commision</div>
										<div class="properties__offer-value"><strong> $79</strong>
										</div>
									</div>
									<div class="properties__offer-column">
										<div class="properties__offer-value"><strong>$224,386</strong>
										</div>
									</div>
								</div>
								<div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 165 Sq Ft</span><span class="properties__params">Land Size - 210 Sq Ft</span></div>
							</div>
							<div class="properties__intro">
								<p><?php echo $value->description ?></p>
							</div><a href="/details/<?php echo $value->id ?>" class="properties__more">View details</a>
						</div>
						<!-- end of block .properties__info-->
					</div>
					<!-- end of block .properties__item-->
				</div>
                <?php } ?>
			</div>
			<!-- <div class="widget__footer"><a href="" class="widget__more js-properties-more">More listings</a></div> -->
		</div>
	</div>
</div>
@endsection