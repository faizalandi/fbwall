
$(document).ready(function(){
	 //assign the select box - you can use yoyr own
        var $r = $("#friendList option");
		//sort function - order by assending
        $r.sort(function(a, b) {
            if (a.text < b.text) return -1;
            if (a.text == b.text) return 0;
            return 1;
        });
        $($r).remove();
		//append the sorted select option to selectbox
        $("#friendList").append($($r));
		//default selected option change
		$("#friendList option").eq(0).attr("selected","selected");
		
		
	
});
