function loadRegion(sel,type_id,selName,url){
	$("#"+selName+" option").each(function(){
		jQuery(this).remove();
	});
	$("<option value=0>请选择</option>").appendTo($('#'+selName));
	if(jQuery("#"+sel).val()==0){
		return;
	}
	$.getJSON(url,{pid:jQuery("#"+sel).val(),type:type_id},
		function(data){
			if(data){
				$.each(data,function(idx,item){
					$("<option value="+item.id+">"+item.name+"</option>").appendTo($('#'+selName));
				});
			}else{
				$("<option value='0'>请选择</option>").appendTo(jQuery("#"+selName));
			}
		}
	);
}