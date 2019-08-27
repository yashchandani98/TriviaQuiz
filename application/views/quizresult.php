<div class="image-container set-full-height" style="background-image: url('<?php echo base_url()?>assets/img/paper-1.jpeg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizardProfile" style="min-height: 250px !important;">
                          <div class="row">
               <div class="tab-pane" >
                    <div class="col-sm-10 col-sm-offset-1">
						<h1> Session ID:<?=$this->session->userdata('session_id')?></h1>
                        <h3 id="userName"></h3>
				  <div id="questionsResult">
				  </div>
				</div>                      
             </div>
                    </div>
                  </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <button class='btn btn-finish btn-fill btn-warning btn-wd' name='next' id='nextQuestion' onclick="window.location.replace('Home')">Finish</button>
		                            </div>
		                            <!-- <div class="clearfix"></div> -->
                                    <div class="pull-left">
		                                <button type='button' class='btn btn-previous btn-fill btn-warning btn-wd' name='previous' onclick="window.location.replace('history')">History</button>
		                            </div>
		                        </div>
						</div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->
		<?php
		$this->load->view('Include/Footer');
		?>
        <script>
        $(document).ready(function(){
            $.getJSON("<?=base_url()?>getQuizDetails",function(data){
                $("#userName").text("Hello "+data['Name']);
            });
            $.getJSON("<?=base_url()?>getQuizQuestions",function(data){
				$("#questionsResult").empty();
				var i=0;
				for(i=0;i<data.length;i++){
					var questionName=data[i]['questionName'];
					$("#questionsResult").append("Q: "+questionName+"<br/>Ans:");
					var j=0;
					for(j=0;j<data[i]['option'].length;j++){
						if(j>0){
							$("#questionsResult").append(",");	
						}
						var option = data[i]['option'][j];
						$("#questionsResult").append(option);
					}
					$("#questionsResult").append("<br/>");
				}
            });
        });
        </script>