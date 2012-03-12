$(document).ready(function(){
	
	$("#syn_1").change(onSelectChange);	
	$("#syn_2").change(onSelectChange);
	$("#syn_3").change(onSelectChange);	
	$("#syn_4").change(onSelectChange);
	$("#syn_5").change(onSelectChange);	
	$("#syn_6").change(onSelectChange);
	$("#syn_7").change(onSelectChange);	
	$("#syn_8").change(onSelectChange);
	$("#syn_9").change(onSelectChange);
	$("#syn_10").change(onSelectChange);
	$("#syn_11").change(onSelectChange);
	$("#syn_12").change(onSelectChange);
	$("#syn_13").change(onSelectChange);
	$("#syn_14").change(onSelectChange);
	$("#syn_15").change(onSelectChange);
	$("#syn_16").change(onSelectChange);
	$("#syn_17").change(onSelectChange);
	$("#syn_18").change(onSelectChange);
	$("#syn_19").change(onSelectChange);
	$("#syn_20").change(onSelectChange);
	$("#syn_21").change(onSelectChange);
	$("#syn_22").change(onSelectChange);
	$("#syn_23").change(onSelectChange);
	$("#syn_24").change(onSelectChange);
	$("#syn_25").change(onSelectChange);
	$("#syn_26").change(onSelectChange);
	$("#syn_27").change(onSelectChange);
	$("#syn_28").change(onSelectChange);
	$("#syn_29").change(onSelectChange);
	$("#syn_30").change(onSelectChange);
	$("#syn_31").change(onSelectChange);	
	$("#syn_32").change(onSelectChange);
	$("#syn_33").change(onSelectChange);
	$("#propertyunit").keyup(onSelectChange);
	$("#punit").keyup(onSelectChange);
	$("#fname").keyup(onSelectChange);
	$("#lname").keyup(onSelectChange);
	$("#duedate").change(onSelectChange);
	$("#phonetype").change(onSelectChange);
	$("#pnumber").keyup(onSelectChange);
	$("#opnumber").keyup(onSelectChange);
	$("#response").keyup(onSelectChange);
	$("#cpn").keyup(onSelectChange);
	$("#comment").keyup(onSelectChange);
	$("#initial").keyup(onSelectChange);
	
});

function onSelectChange(){
	
	var realvaluesphone = [];
	var realvalues = [];
	var realvalues2 = [];
	var realvalues3 = [];
	var realvalues4 = [];
	var realvalues5 = [];
	var realvalues6 = [];
	var realvalues7 = [];
	var realvalues8 = [];
	var realvalues9 = [];
	var realvalues10 = [];
	var realvalues11 = [];
	var realvalues12 = [];
	var realvalues13 = [];
	var realvalues14 = [];
	var realvalues15 = [];
	var realvalues16 = [];
	var realvalues17 = [];
	var realvalues18 = [];
	var realvalues19 = [];
	var realvalues20 = [];
	var realvalues21 = [];
	var realvalues22 = [];
	var realvalues23 = [];
	var realvalues24 = [];
	var realvalues25 = [];
	var realvalues26 = [];
	var realvalues27 = [];
	var realvalues28 = [];
	var realvalues29 = [];
	var realvalues30 = [];
	var realvalues31 = [];
	var realvalues32 = [];
	var realvalues33 = [];
	
	$('#phonetype :selected').each(function(i, selected) {
    realvaluesphone[i] = $(selected).val();
	});
	
	$('#syn_1 :selected').each(function(i, selected) {
    realvalues[i] = $(selected).val();
	});
	
	$('#syn_2 :selected').each(function(i, selected) {
    realvalues2[i] = $(selected).val();
	});
	
	$('#syn_3 :selected').each(function(i, selected) {
    realvalues3[i] = $(selected).val();
	});
	
	$('#syn_4 :selected').each(function(i, selected) {
    realvalues4[i] = $(selected).val();
	});
	
	$('#syn_5 :selected').each(function(i, selected) {
    realvalues5[i] = $(selected).val();
	});
	
	$('#syn_6 :selected').each(function(i, selected) {
    realvalues6[i] = $(selected).val();
	});
	
	$('#syn_7 :selected').each(function(i, selected) {
    realvalues7[i] = $(selected).val();
	});
	
	$('#syn_8 :selected').each(function(i, selected) {
    realvalues8[i] = $(selected).val();
	});
	
	$('#syn_9 :selected').each(function(i, selected) {
    realvalues9[i] = $(selected).val();	
	});
	
	$('#syn_10 :selected').each(function(i, selected) {
    realvalues10[i] = $(selected).val();
	});
	
	$('#syn_11 :selected').each(function(i, selected) {
    realvalues11[i] = $(selected).val();
	});
	
	
	$('#syn_12 :selected').each(function(i, selected) {
    realvalues12[i] = $(selected).val();
	});
	
	$('#syn_13 :selected').each(function(i, selected) {
    realvalues13[i] = $(selected).val();
	});

	$('#syn_14 :selected').each(function(i, selected) {
    realvalues14[i] = $(selected).val();
	});
	
	$('#syn_15 :selected').each(function(i, selected) {
    realvalues15[i] = $(selected).val();
	});
	
	$('#syn_16 :selected').each(function(i, selected) {
    realvalues16[i] = $(selected).val();
	});
	
	
	$('#syn_17 :selected').each(function(i, selected) {
    realvalues17[i] = $(selected).val();
	});
	
	$('#syn_18 :selected').each(function(i, selected) {
    realvalues18[i] = $(selected).val();
	});
	
	$('#syn_19 :selected').each(function(i, selected) {
    realvalues19[i] = $(selected).val();
	});
	
	$('#syn_20 :selected').each(function(i, selected) {
    realvalues20[i] = $(selected).val();
	});
	
	$('#syn_21 :selected').each(function(i, selected) {
    realvalues21[i] = $(selected).val();
	});
	
	$('#syn_22 :selected').each(function(i, selected) {
    realvalues22[i] = $(selected).val();
	});
	
	$('#syn_23 :selected').each(function(i, selected) {
    realvalues23[i] = $(selected).val();
	});
	
	$('#syn_24 :selected').each(function(i, selected) {
    realvalues24[i] = $(selected).val();
	});
	
	$('#syn_25 :selected').each(function(i, selected) {
    realvalues25[i] = $(selected).val();
	});
	
	$('#syn_26 :selected').each(function(i, selected) {
    realvalues26[i] = $(selected).val();
	});
	
	$('#syn_27 :selected').each(function(i, selected) {
    realvalues27[i] = $(selected).val();
	});
	
	$('#syn_28 :selected').each(function(i, selected) {
    realvalues28[i] = $(selected).val();
	});
	
	$('#syn_29 :selected').each(function(i, selected) {
    realvalues29[i] = $(selected).val();
	});
	
	$('#syn_30 :selected').each(function(i, selected) {
    realvalues30[i] = $(selected).val();
	});
	
	$('#syn_31 :selected').each(function(i, selected) {
    realvalues31[i] = $(selected).val();
	});
	
	$('#syn_32 :selected').each(function(i, selected) {
    realvalues32[i] = $(selected).val();
	});
	
	$('#syn_33 :selected').each(function(i, selected) {
    realvalues33[i] = $(selected).val();
	});
	
	var selected2 = $("#syn_9 option:selected");	
	
	var output2 = "";
	if(selected2.val()){
		output2 =  (realvalues9)+")";
	}	
	
	var selected3 = $("#syn_10 option:selected");	
	
	var output3 = "";
	if(selected3.val()){
		output3 =  (realvalues10)+")";
	}
	
	var selected4 = $("#syn_11 option:selected");	
	
	var output4 = "";
	if(selected4.val()){
		output4 =  (realvalues11)+")";
	}
	
	var selected5 = $("#syn_12 option:selected");	
	
	var output5 = "";
	if(selected5.val()){
		output5 =  (realvalues12)+")";
	}
	
	var selected6 = $("#syn_13 option:selected");	
	
	var output6 = "";
	if(selected6.val()){
		output6 =  (realvalues13)+")";
	}
	
	var selected7 = $("#syn_14 option:selected");	
	
	var output7 = "";
	if(selected7.val()){
		output7 =  (realvalues14)+")";
	}
	
	var selected8 = $("#syn_15 option:selected");	
	
	var output8 = "";
	if(selected8.val()){
		output8 =  (realvalues15)+")";
	}
	
	var selected9 = $("#syn_16 option:selected");	
	
	var output9 = "";
	if(selected9.val()){
		output9 =  (realvalues16)+")";
	}
	
	var selected10 = $("#syn_17 option:selected");	
	
	var output10 = "";
	if(selected10.val()){
		output10 =  (realvalues17)+")";
	}
	
	var selected11 = $("#syn_18 option:selected");	
	
	var output11 = "";
	if(selected11.val()){
		output11 =  (realvalues18)+")";
	}
	
	var selected12 = $("#syn_19 option:selected");	
	
	var output12 = "";
	if(selected12.val()){
		output12 =  (realvalues19)+")";
	}
	
	var selected13 = $("#syn_20 option:selected");	
	
	var output13 = "";
	if(selected13.val()){
		output13 =  (realvalues20)+")";
	}
	
	
	var selected14 = $("#syn_21 option:selected");	
	
	var output14 = "";
	if(selected14.val()){
		output14 =  (realvalues21)+")";
	}
	
	var selected15 = $("#syn_22 option:selected");	
	
	var output15 = "";
	if(selected15.val()){
		output15 =  (realvalues22)+")";
	}
	
	var selected16 = $("#syn_23 option:selected");	
	
	var output16 = "";
	if(selected16.val()){
		output16 =  (realvalues23)+")";
	}
	
	var selected17 = $("#syn_24 option:selected");	
	
	var output17 = "";
	if(selected17.val()){
		output17 =  (realvalues24)+")";
	}
	
	var selected18 = $("#syn_25 option:selected");	
	
	var output18 = "";
	if(selected18.val()){
		output18 =  (realvalues25)+")";
	}
	
	var selected19 = $("#syn_26 option:selected");	
	
	var output19 = "";
	if(selected19.val()){
		output19 =  (realvalues26)+")";
	}
	
	var selected20 = $("#syn_27 option:selected");	
	
	var output20 = "";
	if(selected20.val()){
		output20 =  (realvalues27)+")";
	}
	
	var selected21 = $("#syn_28 option:selected");
	
	var output21 = "";
	if(selected21.val()){
		output21 =  (realvalues28);
	}
	
	var selected22 = $("#syn_29 option:selected");
	
	var output22 = "";
	if(selected22.val()){
		output22 =  (realvalues29)+")";
	}
	
	var selected23 = $("#syn_30 option:selected");
	
	var output23 = "";
	if(selected23.val()){
		output23 =  (realvalues30)+")";
	}
	
	var selected24 = $("#syn_31 option:selected");
	
	var output24 = "";
	if(selected24.val()){
		output24 =  (realvalues31)+")";
	}
	
	var selected25 = $("#syn_32 option:selected");
	
	var output25 = "";
	if(selected25.val()){
		output25 =  (realvalues32)+")";
	}
	
	var selected26 = $("#syn_33 option:selected");
	
	var output26 = "";
	if(selected26.val()){
		output26 =  (realvalues33)+")";
	}
	
	$('#pnumber').keyup(function(){

    if( this.value.indexOf('CEL') !== 0 ){ 
        this.value = 'CEL ' + this.value;
    }
	})
	
	
	$('#comment').keyup(function(){

    if( this.value.indexOf('Re: ') !== 0 ){ 
        this.value = 'Re: ' + this.value;
    }
	})



	
	
	$("#fullsyntax").html((realvalues)+(realvalues2)+(realvalues3)+(realvalues4)+(realvalues5)+(realvalues6)+(realvalues7)+(realvalues8)+(output2)+(output3)+(output4)+(output5)+(output6)+(output7)+(output8)+(output9)+(output10)+(output11)+(output12)+(output13)+(output14)+(output15)+(output16)+(output17)+(output18)+(output19)+(output20)+(output21)+(output22)+(output23)+(output24)+(output25)+(output26)+": "+" "+$('#duedate').val()+" "+ $('#property').val().toUpperCase() + " - "+$('#punit').val()+' '+$('#cpn').val()+' '+$('#fname').val()+' '+$('#lname').val()+', '+' '+' '+$('#pnumber').val()+' '+$('#phonetype').val()+' '+$('#opnumber').val()+" "+$('#comment').val()+" -" + $('#initial').val().toUpperCase());
}

