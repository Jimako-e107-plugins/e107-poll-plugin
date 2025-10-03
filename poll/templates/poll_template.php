<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */
 
if (!defined('e107_INIT')) { exit; }
 
/*	v2.x template for  polls when user has not voted 	*/

$POLL_TEMPLATE = array();


$POLL_TEMPLATE['form']['start'] = "
<div class='clearfix'>
	<div>
		<div class='form-group control-group'>
			Poll: {QUESTION}
			
";

$POLL_TEMPLATE['form']['item'] = "
			<div class='radio'>
				{ANSWER} 
			</div>";

$POLL_TEMPLATE['form']['end'] = "
			
		</div>
		<div class='control-group'>
			 <div class='controls text-center'>
				{SUBMITBUTTON}	
			</div>
		</div>
	</div>
</div>
";
 

/*	v2.x template for polls when user HAS voted		*/

$POLL_TEMPLATE['results']['start'] = "
<div class='clearfix'>
	<div>
		<h5>Poll: {QUESTION}</h5>
";

$POLL_TEMPLATE['results']['item'] = "
			<strong>{OPTION}</strong><small class='pull-right float-right float-end'><a href='#' class='e-tip' title=\"{VOTES}\">{PERCENTAGE}</a></small>
			{BAR}
";

$POLL_TEMPLATE['results']['end'] = "
		<div class='text-center'><small>{VOTE_TOTAL}</small></div>
		 {COMMENTS} {OLDPOLLS}
	</div>
</div>
";

/*	v2.x template for polls when user HAS been denied the ability to vote (userclass)	*/

$POLL_TEMPLATE['denied']['start'] = $POLL_TEMPLATE['results']['start'];
$POLL_TEMPLATE['denied']['item'] = $POLL_TEMPLATE['results']['item'];
$POLL_TEMPLATE['denied']['end'] = "<div class='alert text-warning text-center'>{DISALLOWMESSAGE}</div>
		<div class='text-center'><small>{VOTE_TOTAL}</small></div>
		 {COMMENTS} {OLDPOLLS}
	</div>
</div>
";
