// Select the cats
// assign3



$(function() {
	var slow = 800;

	$("#hide-all").click(function () {
		$("img").hide();
	});

	$("#show-even").click(function () {
		$("img:odd").show(slow);
	});

	$("#show-odd").click(function () {
		$("img:even").show(slow);
	});

	$("#right-shift").click(function () {
		var imageLast = $("img:last");
		$("img:first").parent().prepend(imageLast);
	});

	$("#left-shift").click(function () {
		var imageFirst = $("img:first");
		$("img:last").parent().append(imageFirst);
	});


});




/*				The buttons!
              <li class="imageList"><button id="hide-all" onclick="hideAll()">Hide all images</button></li>
              <li class="imageList"><button id="show-even" onclick="showEven">Show even images</button></li>
              <li class="imageList"><button id="show-odd" onclick="showOdd">Show odd images</button></li>
              <li class="imageList"><button id="right-shift" onclick="rightShift">Right shift</button></li>
              <li class="imageList"><button id="left-shift" onclick="leftShift">Left shift</button></li>
 */


/*
function hideAll() {
	$("img").hide()
}

function showEven() {
	$("img:odd").show(slow)
  
}

function showOdd()
{
	$("img:even")  
}

function rightShift()
{
  
}

function leftShift()
{
  
}
*/