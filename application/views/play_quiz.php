<div class="image-container set-full-height" style="background-image: url('<?php echo base_url()?>assets/img/paper-1.jpeg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
    	<h1> Session ID:<?=$this->session->userdata('session_id')?></h1>
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizardProfile" style="min-height: 250px !important;">
                          <div class="row">
               <div class="tab-pane" >
                    <div class="col-sm-10 col-sm-offset-1">
						<p id="question"></p>
				  <div id="options">
				  </div>
				  <input type="hidden" name="questionId" id="questionId" value="0"/>
				</div>                      
             </div>
                    </div>
                  </div>

		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='next' id='nextQuestion' value="Next" />
		                            </div>
		                            <div class="clearfix"></div>
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
var question=0;
var questions;
$("#nextQuestion").click(function(){
	var type= $('input[name=options]').attr('type');
	if(type=="radio"){
		var op1 = $('input[name=options]:checked').val();
	}
	else if(type="checkbox"){
		var op =[];
		$(':checkbox:checked').each(function(i){
          op[i] = $(this).val();
        });
		var op1=op.join();
	}
	var que = $("#questionId").val();
	if(op1==null){
		swal("Error!", "Select atleast one option!", "error");
		return 0;
	}
	$("#overlay").show();
	$.post("<?=base_url()?>submitAnswer/"+que+"/"+op1,function(data){
		if(question==4){
		$("#nextQuestion").attr('value','Submit');
	}
	if(question==8){
		swal("Success!", "Test finished successfully!", "success");
		window.location.replace("<?=base_url()?>getQuizResult");
		return 0;
	}
	displayQuestion();
	});
});
function displayQuestion(){
	$("#options").empty();
	$("#question").text(questions[question]['Question']);
	$("#questionId").val(questions[question]['Pk_id']);
	var i=0;
	var j=question+4;
	var type="radio";
	if(questions[question]['Options_correct']>1)
	type="checkbox";
	for(i=question;i<j;i++){
		var option = questions[question]['Option_name'];
		var value = questions[question]['Option_id'];
		$("#options").append('<input type="'+type+'" name="options" value="'+value+'">'+option+'<br>');
		question++;
	}
	$("#overlay").hide();
}
$(document).ready(function(){
	$("#overlay").show();
	$.getJSON("<?=base_url()?>getAllQuestions",function(data){
		questions=data;
		displayQuestion();
	});
});
// window.onbeforeunload = function() {
//         return "Your Progress won't be counted!";
// }
</script>
	
