<?php

function questionCard($array){

	$q = $array[0];
	$a = $array[1];
	$cat = $array[2];
	$subCat = $array[3];

	$target = "question_" . substr(md5($q), 0, 5);

	$out = <<<EOD
				<div class="card card-$cat">
          <div class="g_icon i-$cat"></div>
          <div class="cardDetails">
            <h3 class="title">$subCat</h3>
            <p>Answer the question below.</p>
          </div>
          <div class="question">$q
          <div class="cardBtn aligncenter">
            <a class="btn" href="#$target" role="button" class="btn" data-toggle="modal"><i class="icon-share-alt"></i> Answer</a>
          </div>
          </div>
          <div class="category">
            <h4 class="aligncenter">Society and Culture</h4>
          </div>
        </div>
             
        <!-- Modals -->
        <div class="modal hide" id="$target" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header {$cat}_bkg">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 id="myModalLabel">$subCat</h3>
          </div>
          <div class="modal-body">
            <p><strong>Question:</strong> $q</p>
            <p><strong>Answer:</strong> $a</p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href=""><img src="https://dev.twitter.com/sites/default/files/images_documentation/bird_blue_16.png" alt=""> Twitter</a> <a class="btn btn-primary" href="">Facebook</a> <a class="btn btn-primary" href="">Google+</a>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          </div>
        </div>
EOD;

return $out;

}

?>