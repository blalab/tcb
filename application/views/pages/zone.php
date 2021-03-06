<style type="text/css">
	body{
    background-image: url('<?php echo base_url('assets/img/tcb/tcb-backstage.jpg'); ?>');
    background-repeat: no-repeat;
    background-position: right top; 
   
	} 
</style>


<div class="row">
  <div class="col-xs-12 ">
  <br/><br/><br/>
  </div>
</div>

<!-- r2 -->

<div class="row basetxt">
  <div class=" col-sm-1 col-md-1 text-center basetxt">
  </div>
  <div class="col-xs-1 col-sm-1 col-md-1 text-center basetxt">
  	
  </div>
  <div class="col-xs-9 col-sm-9 col-md-8 text-left">
  		<div class="text-gray text-smaller pull-right"><em>This section is private</em></div><br/>
  		<div class="fhr"></div>		
  		  
		<div class="row">
			<div class=" col-sm-10 text-left basetxt txtsmall graytxt1">

					<span class="txttitle tcb-color" ><?php echo $user->first_name." ".$user->last_name; ?>  <span class="text-white">Backstage</span></span>

					<br/><br/>
					<div class="text-smaller"> 

					<?php 
					$exist=$user->exist;
					
					if($exist==1){ echo "<span class='glyphicon glyphicon-star'></span> Founder Member</div>";}
					
					?>
					

					<span class="lead">
							<?php echo $tcbuser->city; ?> , 
							<?php echo $tcbuser->country; ?> |
							
							<?php echo $tcbuser->email; ?> | 
							<strong>@</strong>  <?php echo $tcbuser->s01; ?> 
					</span>

					<div class="text-gray"><em><?php echo $tcbuser->pitch; ?></em></div>
			</div>
			<br/>
			<div class=" col-sm-2 text-left basetxt txtsmall graytxt1">
				<a class="btn btn-success" <?php echo "href='/auth/edit_user/".$tcbuser->id."'"; ?> > 
				<i class="fa fa-gear fa-3x"></i><br/>Edit My Info</a>
			</div>
		</div> <!-- close row -->	
		<div class="row">

			<div class=" col-sm-12 text-left basetxt txtsmall graytxt1">

						<br/><br/>
						<?php								     		
						foreach($currentGroups as $object){				
						
						
						$name=($object->name);
						$des=($object->description);

						switch($des){
							case "dev": $icon="gear"; $bg="bg-dev";
								break;
							case "dat": $icon="database"; $bg="bg-dat";
								break;
							case "des": $icon="pencil"; $bg="bg-des";
								break;
							case "pro": $icon="cube"; $bg="bg-pro";
								break;
							case "fin": $icon="money"; $bg="bg-fin";
								break;
							default: $icon=""; $bg="";
										

									}
									
									
							echo "<div class='label label-default ".$bg." pull-left' style='padding:5px; margin:2px;'>
							<i class='fa fa-".$icon."'></i>".$name."</div>";
							
							}
							?>

			
			

			
			</div>
			<a class="tcb-color pull-right" <?php echo "href='/tcb/member/".$tcbuser->id."'"; ?> > 
			<span class="text-smaller"><i class="fa fa-eye fa-1x"></i> view public profile</span></a>

		</div>	
		<div class="row">

			<div class=" col-sm-12 text-left basetxt txtsmall graytxt1">

			<br/>
			<!-- ACCORDION -->
		    <div class="panel-group" id="accordion">
				  
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				          Invite
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse in">
				      <div class="panel-body">
				      		<div class="col-sm-5">
				      			<img class="img-responsive" src="<?php echo base_url('assets/img/tcb/tcb_badge.png'); ?>" alt="846766"/>

				      		</div>
				      		<div class="col-sm-7">

				      			<span class="blacktxt txtsmaller">
				      			TCB846766 it's a network of Tech Talent looking for projects to increase their experience
				      			, get exposure to new projects, meet new people and why not make an extra money. If you know
				      			someone interested in joining TCB please invite her/him here:
				      			</span>
				      			<br/>
				      			<a class="btn btn-success pull-right" href="/auth/invite_user">Invite</a>
				      		</div>

				      </div>
				    </div>
				  </div>

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">

				          TCB Goodies
				        </a>
				      </h4>
				    </div>
				    <div id="collapseFour" class="panel-collapse collapse">
				      <div class="panel-body">
				      	<div class="row">
				      		<div class="col-sm-4">
				      			<img class="img-responsive" src="<?php echo base_url('assets/img/tcb/tcb_stickerpack.png'); ?>" alt="846766"/>

				      		</div>
				      		<div class="col-sm-8">
				      			<span class="blacktxt txtsmaller">
				      			Free goodies for TCB846766 Members. Redeem yours at www.retinal.co
				      			</span>

				      			<hr/>
				      			<a class="btn btn-default btn-sm"><h5>Sticker Pack</h5>  #TCB94884 </a>
				      			
				      			
				      			<br/><br/>


				      			<a class="btn btn-success" href="http://retinal.co/collections/frontpage/products/tcb-sticker">Redeem gifts</a>

				      		</div>
				      		
				      	</div>
				      </div>
				    </div>
				  </div>  

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">

				        		TCB Blog
				         
				        </a>
				      </h4>
				    </div>
				    <div id="collapseFive" class="panel-collapse collapse">
				      <div class="panel-body">
				      	<div class="row">
				      		
				      		<div class="col-sm-12 text-center">
				      			<span class="blacktxt txtsmaller">
				      			Send your article or collaboration to:
				      			</span>

				      			<br/>
					      				<h2>hello@tcb.io</h2>

				      			<br/>

				      		</div>
				      		
				      	</div>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">

				        		TCB Wall
				        </a>
				      </h4>
				    </div>
				    <div id="collapseSix" class="panel-collapse collapse">
				      <div class="panel-body">
				      	<div class="row">
				      		
				      		<div class="col-sm-12 text-center">
				      			
				      			<div class="lead blacktxt"> What happens in las Vegas stays in las Vegas!! </div>
				      			
				      			<div class="blacktxt txtsmaller">
				      				Go to TCB Private discussion wall: 
				      			</div>	
				      			
					      				<a href="http://www.reddit.com/r/TCB846766/"><h2>http://www.reddit.com/r/TCB846766/</h2></a>

					      				<br/><br/>
				      			<div class="text-muted text-smaller text-right pull-right"> (Please include your Reddit username in the <a <?php echo "href='/auth/edit_user/".$tcbuser->id."'"; ?>>social media section.</a>) 
				      			<br/>Can't log-in?, shoot us an email to: hello@tcb.io
				      			</div>

				      		</div>
				      		
				      	</div>
				      </div>
				    </div>
				  </div>




				</div> <!--  CLOSE ACCORDION -->

		    <br/><br/>
		    </p> 
		  </div>

	<div class="col-sm-1 col-md-2">
	</div>
</div> <!-- CLOSE ROW -->


				





 
